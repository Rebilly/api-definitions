const yaml = require('js-yaml');
const fs = require('fs');
const path = require('path');

const id = 'products-bundler';

function getProductMappingToBundle() {
  if (!('API_BUNDLED_PRODUCT' in process.env)) {
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

            // TODO: find a way to filter schemas to reduce its' size, probably by using regexp to parse all the references to schemas

            // Override original definitions to include only elements with required tags
            definitionRoot['x-tagGroups'] = productMapping['x-tagGroups'];
            definitionRoot['tags'] = getNewTags(definitionRoot, tagsNamesToInclude);
            const availableMethods = ['get', 'put', 'post', 'delete', 'options', 'head', 'patch', 'trace'];
            definitionRoot['paths'] = getNewPaths(definitionRoot.paths, ctx, tagsNamesToInclude, availableMethods);
            definitionRoot['x-webhooks'] = getNewPaths(definitionRoot['x-webhooks'], ctx, tagsNamesToInclude, ['post']);
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
