const OneTagRule = require('./rules/one-tag-rule');
const id = 'custom-rules';

const rules = {
  oas3: {
    'one-tag-rule': OneTagRule,
  },
};

module.exports = {
  id,
  rules,
};
