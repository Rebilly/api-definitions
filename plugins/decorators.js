const RemovePhpSamplePrefix = require('./decorators/remove-php-sample-prefix');
const RemoveTagGroups = require('./decorators/remove-tag-groups');
const id = 'plugin';


/** @type {import('@redocly/cli').DecoratorsConfig} */
const decorators = {
  oas3: {
    'remove-tag-groups': RemoveTagGroups,
    'remove-php-sample-prefix': RemovePhpSamplePrefix,
  }
};

module.exports = {
  id,
  decorators,
};
