const DescriptionPunctuation = require('./rules/description-punctuation');
const NoUnusedTags = require('./rules/no-unused-tags');
const id = 'custom-rules';

/** @type {import('@redocly/openapi-cli').CustomRulesConfig} */
const rules = {
    oas3: {
        'description-punctuation': DescriptionPunctuation,
        'no-unused-tags': NoUnusedTags,
    },
};

module.exports = {
    id,
    rules,
};
