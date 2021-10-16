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
  const filename = `mapping/${requestedProduct.replaceAll(' ', '')}.yaml`;

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

            // Determine tags names participating in a result bundle of a requested product
            let tagsNamesToInclude = [];
            productMapping['x-tagGroups'].forEach((tagGroup) => {
              tagsNamesToInclude = tagsNamesToInclude.concat(tagGroup.tags);
            });

            // Override original definitions with the requested product settings
            definitionRoot['info'] = getNewInfo(definitionRoot['info'], productMapping);
            definitionRoot['tags'] = getNewTags(definitionRoot, tagsNamesToInclude);
            definitionRoot['x-tagGroups'] = productMapping['x-tagGroups'];
            definitionRoot['paths'] = getNewPaths(definitionRoot['paths'], ctx, tagsNamesToInclude, availableMethods, requestedProduct);
            definitionRoot['x-webhooks'] = getNewPaths(definitionRoot['x-webhooks'], ctx, tagsNamesToInclude, ['post'], requestedProduct);
            if (Object.keys(definitionRoot['x-webhooks']).length === 0) {
              delete definitionRoot['x-webhooks'];
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

function getNewPaths(paths, ctx, tagsNamesToInclude, availableMethods, requestedProduct) {
  if (!paths) {
    return {};
  }
  const newPaths = {};
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
        // Operation has no tags specified, excluding as tags must be defined explicitly
        return;
      }

      if (requestedProduct) {
        if (!('x-products') in operation) {
          // Operation has no products specified, excluding as products must be defined explicitly
          return;
        }

        const hasProduct = operation['x-products'].some((product) => product === requestedProduct);
        if(!hasProduct) {
          // No required product included, excluding operation
          delete definition[method];

          return;
        } else {
          // Remove system information from the operation
          delete operation['x-products'];
        }
      }

      const requiredTags = operation.tags.filter((tagName) => tagsNamesToInclude.indexOf(tagName) !== -1)
      if (requiredTags.length === 0) {
        // No required tags included, excluding operation
        delete definition[method];
      } else {
        // Remove tags that are not participating in any of tag groups of a requested products
        operation.tags = requiredTags;
        hasAtLeastOneOperation = true;
      }
    });

    if (hasAtLeastOneOperation) {
      newPaths[path] = definition;
    }
  }

  return newPaths;
}

function getNewInfo(info, productMapping) {
  if ('info' in productMapping) {
    for (const [property, value] of Object.entries(productMapping.info)) {
      info[property] = value;
    }
  }

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
  if ('x-webhooks' in definitionRoot) {
    sectionsToCheck.push(definitionRoot['x-webhooks']);
  }
  let usedComponents = {};
  sectionsToCheck.forEach((element) => {
    findUsedComponents(usedComponents, definitionRoot, element);
  })

  const newComponents = {
    securitySchemes: definitionRoot.components.securitySchemes,
  };

  for (const [componentType, names] of Object.entries(usedComponents)) {
    newComponents[componentType] = {};
    names.forEach((name) => {
      newComponents[componentType][name] = definitionRoot.components[componentType][name]
    })
  }

  return newComponents;
}

module.exports = {
  id: 'products-bundler',
  decorators,
};
