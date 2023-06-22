const RemoveTagGroups = require('./decorators/remove-tag-groups');
const SdkInlineAllOf = require('./decorators/sdk-inline-all-of');
const SdkInlineEnum = require('./decorators/sdk-inline-enum');
const id = 'plugin';


/** @type {import('@redocly/cli').DecoratorsConfig} */
const decorators = {
  oas3: {
    'remove-tag-groups': RemoveTagGroups,
    'sdk-inline-all-of': SdkInlineAllOf,
    'sdk-inline-enum': SdkInlineEnum,
  }
};

module.exports = {
  id,
  decorators,
};
