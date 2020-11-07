const OneTagRule = require('./rules/one-tag-rule');
const id = 'custom-rules';

/** @type {import('@redocly/openapi-cli').CustomRulesConfig} */
const rules = {
  oas3: {
    'one-tag-rule': OneTagRule,
  },
};

module.exports = {
  id,
  rules,
};
