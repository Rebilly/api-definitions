module.exports = RemoveTagGroups;

/** @type {import('@redocly/cli').OasDecorator} */

function RemoveTagGroups() {
  return {
    Root: {
      leave(Root) {
        if (Root['x-tagGroups']) {
          delete Root['x-tagGroups'];
        }
      }
    }
  }
};
