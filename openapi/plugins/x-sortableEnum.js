module.exports = {
  pathExpression: '$..["x-sortableEnum"]',
  init: function(_swagger, options) {
    if (options.verbose) {
      console.log('* x-sortableEnum plugin');
    }
  },
  process: function(parent, name, jsonpath, swagger) {
    var value = parent[name];
    if (!Array.isArray(value)) {
      throw Error('x-sortableEnum argument should be an array at ' + jsonpath);
    }
    res = [];
    value.forEach(function(str) {
      if (typeof str !== 'string') throw Error('x-sortableEnum supports only string enums ' + jsonpath);
      res.push(str);
      res.push('-' + str);
    });
    delete parent[name];
    parent.enum = res;
  },
  finish: function(swagger) {
  },
}
