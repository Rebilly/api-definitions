const NoUnusedTags = require('./rules/no-unused-tags');
const SiblingRef = require('./rules/sibling-ref');
const id = 'custom-rules';

/** @type {import('@redocly/openapi-cli').CustomRulesConfig} */
const rules = {
    oas3: {
        'no-unused-tags': NoUnusedTags,
        'sibling-ref': SiblingRef,
    },
};

module.exports = () => ({
    id,
    rules,
});
