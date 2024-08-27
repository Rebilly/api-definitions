const RemovePhpSamplePrefix = require('./decorators/remove-php-sample-prefix');
const RemoveTagGroups = require('./decorators/remove-tag-groups');
const ChangeTitle = require('./decorators/change-title');
const RemoveUnusedTags = require('./decorators/remove-unused-tags');
const BackportTo30 = require('./decorators/backport-to-30');
const id = 'plugin';


/** @type {import('@redocly/cli').DecoratorsConfig} */
const decorators = {
  oas3: {
    'remove-tag-groups': RemoveTagGroups,
    'remove-php-sample-prefix': RemovePhpSamplePrefix,
    'remove-unused-tags': RemoveUnusedTags,
    'change-title': ChangeTitle,
    'backport-to-30': BackportTo30,
  }
};

module.exports = () => ({
  id,
  decorators,
});
