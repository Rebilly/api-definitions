module.exports = OnlyOneTag

/** @type {import('@redocly/openapi-cli').OasRule} */
function OnlyOneTag () {
  return {
    Operation(operation, { report, location }) {
      if (!operation.tags) return;
      if (operation.tags.length > 1)
          report({
            message: 'The \`tags\` array should contain only one element.',
            location: location.child(['tags']),
          });
    },
  }
}
