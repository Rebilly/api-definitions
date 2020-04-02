const SORTABLE_ENUM_KEY = 'x-sortableEnum';

module.exports = class SortableEnum {
  static get rule() {
    return 'sortableEnum';
  }

  any() {
    return {
      onEnter: (node) => {
        if (!node[SORTABLE_ENUM_KEY]) return;

        var value = node[SORTABLE_ENUM_KEY];

        // TODO: validate value is an array

        const updatedEnum = [];
        value.forEach(function(value) {
          if (typeof value !== 'string') throw Error('x-sortableEnum supports only string enums ' + jsonpath);
          updatedEnum.push(value);
          updatedEnum.push('-' + value);
        });
        delete node[SORTABLE_ENUM_KEY];
        node.enum = updatedEnum;
      },
    };
  }
};
