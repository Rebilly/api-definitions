module.exports = NoUnusedTag

const ignoredTags = ['Rebilly API', 'Users API', 'Reports API'];

function validate() {
  return (definitionRoot, {report, location, resolve}) => {
    const tags = {};
    definitionRoot.tags.forEach((tagDefinition) => {
      tags[tagDefinition.name] = 0;
    })

    const availableMethods = ['get', 'put', 'post', 'delete', 'options', 'head', 'patch', 'trace'];
    for (const [path, pathRef] of Object.entries(definitionRoot.paths)) {
      const pathDefinition = resolve(pathRef).node;
      availableMethods.forEach((method) => {
        if (!(method in pathDefinition)) {
          return;
        }

        const operation = pathDefinition[method];
        if (!('tags' in operation)) {
          return;
        }

        operation.tags.forEach((tagName) => {
          if (!(tagName in tags) && ignoredTags.indexOf(tagName) === -1) {
            report({message: `Tag "${tagName}" is used in ${path}, but not declared`});

            return;
          }
          tags[tagName]++;
        });
      })
    }

    for (const [tagName, usagesCount] of Object.entries(tags)) {
      if (usagesCount > 0 || ignoredTags.indexOf(tagName) !== -1) {
        continue;
      }
      report({message: `Tag "${tagName}" declared, but never used`});
    }
  };
}

/** @type {import('@redocly/openapi-cli').OasRule} */
function NoUnusedTag() {
  return {
    DefinitionRoot: validate(),
  }
}
