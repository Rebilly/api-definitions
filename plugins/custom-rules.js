const DescriptionPunctuation = require('./rules/description-punctuation');
const HasSDKOperationName = require('./rules/has-sdk-operation-name');
const id = 'custom-rules';

/** @type {import('@redocly/openapi-cli').CustomRulesConfig} */
const rules = {
    oas3: {
        'description-punctuation': DescriptionPunctuation,
        'has-sdk-operation-name': HasSDKOperationName,
    },
};

module.exports = {
    id,
    rules,
};
