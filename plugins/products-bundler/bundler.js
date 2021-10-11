const yaml = require('js-yaml');
const fs = require('fs');
const path = require('path');

const id = 'products-bundler';

function getProductMappingToBundle() {
  if (!('API_BUNDLED_PRODUCT' in process.env) || !process.env.API_BUNDLED_PRODUCT) {
    return;
  }

  const requestedProduct = process.env.API_BUNDLED_PRODUCT;

  return yaml.load(fs.readFileSync(path.resolve(__dirname, requestedProduct + '.yaml'), 'utf8'));
}

function getNewTags(definitionRoot, tagsNamesToInclude) {
  const newTags = [];
  definitionRoot.tags.forEach((tag) => {
    if (tagsNamesToInclude.indexOf(tag.name) !== -1) {
      newTags.push(tag)
    }
  });
  return newTags;
}

function getNewPaths(paths, ctx, tagsNamesToInclude, availableMethods) {
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

      const requiredTags = operation.tags.filter((tagName) => tagsNamesToInclude.indexOf(tagName) !== -1)
      if (requiredTags.length !== 0) {
        // Remove tags that are not participating in any of tag groups of a requested products
        operation.tags = requiredTags;
        hasAtLeastOneOperation = true;
      } else {
        delete definition[method];
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

/** @type {import('@redocly/openapi-cli').CustomRulesConfig} */
const decorators = {
  oas3: {
    'bundle': () => {
      return {
        DefinitionRoot: {
          leave(definitionRoot, ctx) {
            const productMapping = getProductMappingToBundle();

            if (!productMapping) {
              // Use default bundling settings
              return;
            }

            // Determine tags names participating in a result bundle of a requested product
            let tagsNamesToInclude = [];
            productMapping['x-tagGroups'].forEach((tagGroup) => {
              tagsNamesToInclude = tagsNamesToInclude.concat(tagGroup.tags);
            });

            // Override original definitions to include only elements with required tags
            definitionRoot['x-tagGroups'] = productMapping['x-tagGroups'];
            definitionRoot['tags'] = getNewTags(definitionRoot, tagsNamesToInclude);
            const availableMethods = ['get', 'put', 'post', 'delete', 'options', 'head', 'patch', 'trace'];
            definitionRoot['paths'] = getNewPaths(definitionRoot.paths, ctx, tagsNamesToInclude, availableMethods);
            definitionRoot['x-webhooks'] = getNewPaths(definitionRoot['x-webhooks'], ctx, tagsNamesToInclude, ['post']);
            definitionRoot['info'] = getNewInfo(definitionRoot['info'], productMapping);

            // Clean up unused schemes
            let usedComponents = {};
            Object.values(definitionRoot.paths).forEach((pathDefinition) => {
              findUsedComponents(usedComponents, definitionRoot, pathDefinition);
            })
            for (const [componentType, componentNames] of Object.entries(definitionRoot['components'])) {
              if(!(componentType in usedComponents)) {
                // Remove entire section from components
                delete definitionRoot['components'][componentType];

                return;
              }
              Object.keys(componentNames).forEach((name) => {
                if (usedComponents[componentType].indexOf(name) === -1) {
                  delete definitionRoot['components'][componentType][name];
                }
              })
            }
          }
        }
      }
    },
  },
};

module.exports = {
  id,
  decorators,
};
