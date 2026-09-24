module.exports = RemoveUnusedTags;

/** @type {import('@redocly/cli').OasDecorator} */

function RemoveUnusedTags() {
  const usedTags = new Set();
  return {
    Operation: {
      leave(Operation) {
        if (Operation.tags) {
          Operation.tags.forEach(tag => usedTags.add(tag));
        }
      }
    },
    Root: {
      leave(Root) {
        Root.tags = Root.tags.filter(tag => usedTags.has(tag.name));
        if (Root['x-tagGroups']) {
          Root['x-tagGroups'] = Root['x-tagGroups']
            .map(group => ({ ...group, tags: group.tags.filter(tag => usedTags.has(tag)) }))
            .filter(group => group.tags.length > 0);
        }
      }
    }
  }
};
