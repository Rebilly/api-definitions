module.exports = OnlyOneTag

function OnlyOneTag (options) {
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
