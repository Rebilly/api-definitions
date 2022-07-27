module.exports = SummaryPunctuation

function reportIncorrectPunctuation(content, report, location, message) {
  const lastChar = content.trim().slice(-1);
  if (['.', '!'].includes(lastChar)) {
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
function SummaryPunctuation() {
  return {
    Operation: constraintPunctuation('The operation summary should not end with punctuation.', 'summary'),
  }
}
