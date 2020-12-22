module.exports = DescriptionPunctuation

/** @type {import('@redocly/openapi-cli').OasRule} */
function DescriptionPunctuation () {
  return {
    Schema(schema, { report, location }) {
      if (!schema.description) return;
      const lastChar = schema.description.trim().slice(-1);
      if (!['.', '!'].includes(lastChar)) {
          report({
              message: 'The \`description\` should end with punctuation.',
              location: location.child(['description']),
              content: schema.description,
              lastChar,
          });
      }
    },
  }
}
