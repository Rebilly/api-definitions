const RemoveTagGroups = require('./decorators/remove-tag-groups');
const id = 'plugin';


/** @type {import('@redocly/cli').DecoratorsConfig} */
const decorators = {
  oas3: {
    'remove-tag-groups': RemoveTagGroups,
  }
};

module.exports = {
  id,
  decorators,
};
