module.exports = DescriptionPunctuation

/** @type {import('@redocly/openapi-cli').OasRule} */
function DescriptionPunctuation () {
  return {
    Schema(schema, { report, location }) {
      if (!schema.description) return;
      if (!['.', '!'].includes(schema.description.slice(-1))) {
          report({
              message: 'The \`description\` should end with punctuation.',
              location: location.child(['description']),
          });
      }
    },
  }
}
