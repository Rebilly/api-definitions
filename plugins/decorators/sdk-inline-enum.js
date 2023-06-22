module.exports = SdkInlineEnum;

/** @type {import('@redocly/cli').OasDecorator} */

function tryInlineRefEnum(schema, ctx) {
  const resolvedEnum = ctx.resolve(schema);
  if (resolvedEnum.type !== 'string' || !resolvedEnum.enum) {
    return;
  }
  for (key in resolvedEnum) {
    schema[key] = resolvedEnum[key];
  }
  delete schema['$ref'];
}

function tryInlineEnumWithExclusion(schema, ctx) {
  [enumRef, enumExclusions] = schema.allOf;
  if (enumExclusions.length > 1 || !enumExclusions.not || enumExclusions.not.length > 1 || !enumExclusions.not.enum) {
    return;
  }
  const resolvedEnum = ctx.resolve(enumRef).node;
  if (!resolvedEnum || resolvedEnum.type !== 'string' || !resolvedEnum.enum) {
    return;
  }
  for (key in resolvedEnum) {
    schema[key] = resolvedEnum[key];
  }
  for (value of enumExclusions.not.enum) {
    const valueIndex = schema.enum.indexOf(value);
    if (valueIndex !== -1) {
      schema.enum.splice(valueIndex, 1);
    }
  }
  delete schema['allOf'];
}

function SdkInlineEnum() {
  return {
    Schema: {
      leave(schema, ctx) {
        if (schema.ref) {
          tryInlineRefEnum(schema, ctx);
        }
        if (schema.allOf && schema.allOf.length === 2) {
          tryInlineEnumWithExclusion(schema, ctx);
        }
      }
    }
  }
};
