const NoUnusedTags = require('./rules/no-unused-tags');
const id = 'custom-rules';

/** @type {import('@redocly/openapi-cli').CustomRulesConfig} */
const rules = {
    oas3: {
        'no-unused-tags': NoUnusedTags,
    },
};

module.exports = {
    id,
    rules,
};
