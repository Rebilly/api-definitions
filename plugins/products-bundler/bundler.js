const yaml = require('js-yaml');
const fs = require('fs');
const path = require('path');

const availableMethods = ['get', 'put', 'post', 'delete', 'options', 'head', 'patch', 'trace'];

function getRequestedProduct() {
  if (!('REBILLY_API_PRODUCT' in process.env) || !process.env.REBILLY_API_PRODUCT) {
    return;
  }

  return process.env.REBILLY_API_PRODUCT;
}

function getProductMappingToBundle(requestedProduct) {
  const filename = `mapping/${requestedProduct.replace(/ /g, '')}.yaml`;

  return yaml.load(fs.readFileSync(path.resolve(__dirname, filename), 'utf8'));
}

/** @type {import('@redocly/openapi-cli').CustomRulesConfig} */
const decorators = {
  oas3: {
    'bundle': () => {
      return {
        DefinitionRoot: {
          leave(definitionRoot, ctx) {
            const requestedProduct = getRequestedProduct();
            if (!requestedProduct) {
              // Use default bundling settings
              return;
            }
            const productMapping = getProductMappingToBundle(requestedProduct);
            const includedXProducts = ('x-products' in productMapping)
              ? productMapping['x-products']
              : [requestedProduct]

            // Determine tags names participating in a result bundle of a requested product
            let tagsNamesToInclude = [];
            productMapping['x-tagGroups'].forEach((tagGroup) => {
              tagsNamesToInclude = tagsNamesToInclude.concat(tagGroup.tags);
            });

            // Override original definitions with the requested product settings
            definitionRoot['info'] = getNewInfo(definitionRoot['info'], productMapping, ctx.resolve);
            definitionRoot['tags'] = getNewTags(definitionRoot, tagsNamesToInclude);
            definitionRoot['x-tagGroups'] = productMapping['x-tagGroups'];
            if ('servers' in productMapping) {
              definitionRoot['servers'] = productMapping['servers'];
            }
            definitionRoot['paths'] = getNewPaths(definitionRoot['paths'], ctx, tagsNamesToInclude, availableMethods, includedXProducts);
            definitionRoot['webhooks'] = getNewPaths(definitionRoot['webhooks'], ctx, tagsNamesToInclude, ['post'], includedXProducts);
            if (Object.keys(definitionRoot['webhooks']).length === 0) {
              delete definitionRoot['webhooks'];
            }
            definitionRoot['components'] = getNewComponents(definitionRoot);
          }
        }
      }
    },
  },
};

function getNewTags(definitionRoot, tagsNamesToInclude) {
  const newTags = [];
  definitionRoot.tags.forEach((tag) => {
    if (tagsNamesToInclude.indexOf(tag.name) !== -1) {
      newTags.push(tag)
    }
  });

  return newTags;
}

function getNewPaths(paths, ctx, tagsNamesToInclude, availableMethods, includedXProducts) {
  if (!paths) {
    return {};
  }
  const newPathsEntries = [];
  for (const [path, definitionRef] of Object.entries(paths)) {
    let hasAtLeastOneOperation = false;
    const definition = ctx.resolve(definitionRef).node;
    availableMethods.forEach((method) => {
      if (!(method in definition)) {
        // Method not defined for path, skipping
        return;
      }

      const operation = definition[method];
      if (!('tags' in operation)) {
        ctx.report({message: `Operation ${operation.operationId} has no tags specified`})

        // Operation has no tags specified, excluding as tags must be defined explicitly
        return;
      }

      if (includedXProducts && includedXProducts.length) {
        if (!('x-products' in operation)) {
          ctx.report({message: `Operation ${operation.operationId} has no x-product specified`})

          return;
        }

        const requiredProducts = operation['x-products'].filter((product) => includedXProducts.indexOf(product) !== -1);
        if(requiredProducts.length === 0) {
          // No required product included, excluding operation
          delete definition[method];

          return;
        }

        // Remove system information from the operation
        delete operation['x-products'];
      }

      const requiredTags = operation.tags.filter((tagName) => tagsNamesToInclude.indexOf(tagName) !== -1)
      if (requiredTags.length === 0) {
        ctx.report({message: `Operation ${operation.operationId} has x-products set, but the product mapping does not include operation tags: ` + operation.tags.join(', ')})
        // No required tags included, excluding operation
        delete definition[method];
      } else {
        // Remove tags that are not participating in any of tag groups of a requested products
        operation.tags = requiredTags;
        hasAtLeastOneOperation = true;
      }
    });

    if (hasAtLeastOneOperation) {
      newPathsEntries.push([
        // Temporary workaround for servers with organization parameters included
        path.replace('/storefront/', '/').replace('/experimental/', '/'),
        definition
      ]);
    }
  }

  return Object.fromEntries(newPathsEntries);
}

function getNewInfo(info, productMapping, resolve) {
  if ('info' in productMapping) {
    for (const [property, value] of Object.entries(productMapping.info)) {
      info[property] = value;
    }
  }

  const productDescriptionAddon = 'descriptionAddon' in productMapping ? productMapping['descriptionAddon'] : '';
  info.description = resolve(info.description).node.replace(
    '[comment]: <> (x-product-description-placeholder)',
    productDescriptionAddon
  );

  return info;
}

function getNewComponents(definitionRoot) {
  function findUsedComponents(knownComponents, definitionRoot, element) {
    const regexp = new RegExp('#/components/([-a-zA-Z0-9]+)/([-a-zA-Z0-9]+)', 'gim')
    const entries = [...JSON.stringify(element).matchAll(regexp)];
    entries.forEach((entry) => {
      const componentType = entry[1];
      const name = entry[2];
      if (componentType in knownComponents && knownComponents[componentType].indexOf(name) !== -1) {
        return;
      }
      if (!(componentType in knownComponents)) {
        knownComponents[componentType] = [];
      }
      knownComponents[componentType].push(name);
      findUsedComponents(knownComponents, definitionRoot, definitionRoot['components'][componentType][name])
    })
  }

  const sectionsToCheck = [definitionRoot['paths'], definitionRoot['info']];
  if ('webhooks' in definitionRoot) {
    sectionsToCheck.push(definitionRoot['webhooks']);
  }
  let usedComponents = {};
  sectionsToCheck.forEach((element) => {
    findUsedComponents(usedComponents, definitionRoot, element);
  })

  for (const [componentType, components] of Object.entries(definitionRoot.components)) {
    if (componentType === 'securitySchemes') {
      // Use entire object
      continue;
    }

    if (!(componentType in usedComponents)) {
      delete definitionRoot.components[componentType];
      continue;
    }

    Object.keys(components).forEach(name => {
      if (usedComponents[componentType].indexOf(name) === -1) {
        delete definitionRoot.components[componentType][name]
      }
    });
  }

  return definitionRoot.components;
}

module.exports = () => ({
  id: 'products-bundler',
  decorators,
});
