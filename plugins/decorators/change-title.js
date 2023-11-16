module.exports = ChangeTitle;

/** @type {import('@redocly/cli').OasDecorator} */

function ChangeTitle({title}) {
  return {
    Info: {
      leave(Info) {
        Info['title'] = title;
      }
    }
  }
};
