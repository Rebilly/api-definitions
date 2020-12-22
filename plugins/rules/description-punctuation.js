module.exports = DescriptionPunctuation

function reportIncorrectPunctuation(content, report, location, message) {
    const lastChar = content.trim().slice(-1);
    if (!['.', '!'].includes(lastChar)) {
        report({
            message,
            location,
            content,
            lastChar,
        });
    }
}

function constraintPunctuation(message, attribute) {
    return (value, {report, location}) => {
        if (value[attribute] && typeof value[attribute] === 'string') {
            reportIncorrectPunctuation(value[attribute], report, location.child([attribute]), message);
        }
    };
}

/** @type {import('@redocly/openapi-cli').OasRule} */
function DescriptionPunctuation() {
    return {
        Server: constraintPunctuation('The server description should end with punctuation.', 'description'),
        Tag: constraintPunctuation('The tag description should end with punctuation.', 'description'),
        Info: constraintPunctuation('The info description should end with punctuation.', 'description'),
        RequestBody: constraintPunctuation('The request body description should end with punctuation.', 'description'),
        Response: constraintPunctuation('The response description should end with punctuation.', 'description'),
        Schema: constraintPunctuation('The schema description should end with punctuation.', 'description'),
        PathItem: constraintPunctuation('The path description should end with punctuation.', 'description'),
        Parameter: constraintPunctuation('The parameter description should end with punctuation.', 'description'),
        Header: constraintPunctuation('The header description should end with punctuation.', 'description'),
        Operation: constraintPunctuation('The operation description should end with punctuation.', 'description'),
    }
}
