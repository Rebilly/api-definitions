const DescriptionPunctuation = require('./rules/description-punctuation');
const HasUniqueSDKOperationName = require('./rules/has-unique-sdk-operation-name');
const id = 'custom-rules';

/** @type {import('@redocly/openapi-cli').CustomRulesConfig} */
const rules = {
    oas3: {
        'description-punctuation': DescriptionPunctuation,
        'has-sdk-operation-name': HasUniqueSDKOperationName,
    },
};

module.exports = {
    id,
    rules,
};
