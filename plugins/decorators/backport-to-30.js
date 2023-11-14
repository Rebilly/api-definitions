module.exports = BackportTo30;

/** @type {import('@redocly/cli').OasDecorator} */

function BackportTo30({ title }) {
  return {
    Root: {
      enter(Root) {
        Root['openapi'] = '3.0.3';
      }
    },
    Schema: {
      leave(Schema) {
        if (Array.isArray(Schema.type) && Schema.type.length === 2 && Schema.type.includes('null')) {
          Schema.type = Schema.type.filter(t => t !== 'null')[0];
          Schema.nullable = true;
        }
        if (typeof Schema.oneOf !== 'undefined' && Schema.oneOf.length === 2) {
          const nullIndex = Schema.oneOf.findIndex((subSchema) => {
            const keys = Object.keys(subSchema);
            if (keys.length === 1 && keys[0] === 'type') {
              return subSchema.type === 'null';
            }
          });
          if (nullIndex !== -1) {
            Schema.oneOf.splice(nullIndex, 1);
            // Workaround for ReadyToPay features
            // TODO consider removing this workaround
            if (typeof Schema.oneOf[0].$ref !== 'string' || !Schema.oneOf[0].$ref.includes('Feature') || Schema.oneOf[0].$ref.includes('PaymentCard')) {
              Schema.allOf = Schema.oneOf;
              delete Schema.oneOf;
            }
            Schema.type = 'object';
            Schema.nullable = true;
          }
        }
        if (typeof Schema.anyOf !== 'undefined') {
          const nullIndex = Schema.anyOf.findIndex((subSchema) => {
            const keys = Object.keys(subSchema);
            if (keys.length === 1 && keys[0] === 'type') {
              return subSchema.type === 'null';
            }
          });
          if (nullIndex !== -1) {
            Schema.anyOf.splice(nullIndex, 1);
            Schema.type = 'object';
            Schema.nullable = true;
          }
        }
      },
    }
  }
};
