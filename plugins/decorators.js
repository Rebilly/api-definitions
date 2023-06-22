const RemoveTagGroups = require('./decorators/remove-tag-groups');
const SdkInlineAllOf = require('./decorators/sdk-inline-all-of');
const id = 'plugin';


/** @type {import('@redocly/cli').DecoratorsConfig} */
const decorators = {
  oas3: {
    'remove-tag-groups': RemoveTagGroups,
    'sdk-inline-all-of': SdkInlineAllOf,
  }
};

module.exports = {
  id,
  decorators,
};
