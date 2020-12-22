const OneTagRule = require('./rules/one-tag-rule');
const DescriptionPunctuation = require('./rules/description-punctuation');
const id = 'custom-rules';

/** @type {import('@redocly/openapi-cli').CustomRulesConfig} */
const rules = {
  oas3: {
    'one-tag-rule': OneTagRule,
    'description-punctuation': DescriptionPunctuation,
  },
};

module.exports = {
  id,
  rules,
};
