const REBILLY_ENUM_KEY = 'x-rebillyEnum';

module.exports = class SortableEnum {
    static get rule() {
        return 'rebillyEnum';
    }

    any() {
        return {
            onEnter: async (node, _, ctx) => {
                if (!node[REBILLY_ENUM_KEY]) return;

                const value = node[REBILLY_ENUM_KEY];

                if (!value.target) throw Error('x-rebillyEnum requires target to be set ' + jsonpath);

                let target = value.target;

                if (target.$ref && typeof target.$ref === 'string') {
                    target = (await ctx.resolveNode(target, ctx)).node;
                }

                if (!target.enum) throw Error('x-rebillyEnum requires target to have enum ' + jsonpath);

                if (value.exclude && Array.isArray(value.exclude)) {
                    target.enum = target.enum.filter(item => !value.exclude.includes(item));
                }

                Object.assign(node, target);

                delete node[REBILLY_ENUM_KEY];
            },
        };
    }
};
