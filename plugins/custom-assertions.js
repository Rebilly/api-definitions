const sortOrder = require('./assertions/sort-order');

// Redocly discourages dashes within the assertions plugin id or function name and throws a warning
const id = 'customAssertions';

module.exports = {
    id,
    assertions: {
        sortOrder,
    },
};
