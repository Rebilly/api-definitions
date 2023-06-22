module.exports = SdkInlineAllOf;

/** @type {import('@redocly/cli').OasDecorator} */

const safeToIgnore = ['allOf', 'description'];

function SdkInlineAllOf() {
  return {
    Schema: {
      leave(schema, ctx) {
        if (ctx.location.pointer !== '#/' && typeof schema.allOf === 'object' && Array.isArray(schema.allOf) && schema.allOf.length === 1 && typeof schema.allOf[0].$ref === 'string') {
          for (const key in schema) {
            if (!safeToIgnore.includes(key)) {
              return;
            }
          }
          const $ref = schema.allOf[0].$ref;
          for (const key in schema) {
            delete schema[key];
          }
          schema.$ref = $ref;
        }
      }
    }
  }
};
