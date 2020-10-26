const OneTagRule = require('./rules/one-tag-rule');
const id = 'customRules';

const rules = {
  oas3: {
    'one-tag-rule': OneTagRule,
  },
};

module.exports = {
  id,
  rules,
};
