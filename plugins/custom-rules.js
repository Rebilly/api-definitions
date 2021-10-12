const DescriptionPunctuation = require('./rules/description-punctuation');
const HasSDKOperationName = require('./rules/has-sdk-operation-name');
const NoUnusedTags = require('./rules/no-unused-tags');
const id = 'custom-rules';

/** @type {import('@redocly/openapi-cli').CustomRulesConfig} */
const rules = {
    oas3: {
        'description-punctuation': DescriptionPunctuation,
        'has-sdk-operation-name': HasSDKOperationName,
        'no-unused-tags': NoUnusedTags,
    },
};

module.exports = {
    id,
    rules,
};
