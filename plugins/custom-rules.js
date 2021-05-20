const DescriptionPunctuation = require('./rules/description-punctuation');
const HasSDKOperationName = require('./rules/has-sdk-operation-name');
const ValidRoleTemplates = require('./rules/valid-role-templates');
const id = 'custom-rules';

/** @type {import('@redocly/openapi-cli').CustomRulesConfig} */
const rules = {
    oas3: {
        'description-punctuation': DescriptionPunctuation,
        'has-sdk-operation-name': HasSDKOperationName,
        'valid-role-templates': ValidRoleTemplates,
    },
};

module.exports = {
    id,
    rules,
};
