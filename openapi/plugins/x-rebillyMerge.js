var jpointer = require('json-pointer');
var mergePatch = require('json-merge-patch');

module.exports = {
  pathExpression: '$..["x-rebillyMerge"]',
  init: function(_swagger, options) {
    if (options.verbose) {
      console.log('* x-rebillyMerge plugin');
    }
  },
  process: function(parent, name, jsonpath, swagger) {
    var value = parent[name];
    if (!Array.isArray(value)) {
      throw Error('x-rebillyMerge argument should be array at ' + jsonpath);
    }
    let res = null;
    value.forEach(function(obj) {
      if (typeof obj !== 'object') throw Error('Can\'t merge non-object values at ' + jsonpath);
      if (obj.$ref && (typeof obj.$ref === 'string')) {
        obj = jpointer.get(swagger, obj.$ref.substring(1));
      }
      res = mergePatch.apply(res, obj);
    });
    delete parent[name];
    Object.assign(parent, res);
  },
  finish: function(swagger) {
    // TODO: cleanup unused $refs
  },
}
