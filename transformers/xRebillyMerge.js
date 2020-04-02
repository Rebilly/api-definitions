const jsonmergepatch = require('json-merge-patch');

const MERGE_KEY = 'x-rebillyMerge';

module.exports = class RebillyMerge {
  static get rule() {
    return 'rebillyMerge';
  }

  any() {
    return {
      onEnter: async (node, _, ctx) => {
        if (!node[MERGE_KEY]) return;

        var value = node[MERGE_KEY];
        if (!Array.isArray(value)) {
          return [ctx.createError('x-rebillyMerge argument should be ane array', 'key')];
        }

        let res = null;
        const errors = [];
	      for (let obj of value) {
          if (typeof obj !== 'object') {
            errors.push(ctx.createError("Can't merge non-object values", 'key'));
            return;
          }
          if (obj.$ref && typeof obj.$ref === 'string') {
            obj = (await ctx.resolveNode(obj, ctx)).node;
          }
          res = jsonmergepatch.apply(res, obj);
        }

        Object.assign(node, res);

        delete node[MERGE_KEY];

        return errors;
      },
    };
  }
};
