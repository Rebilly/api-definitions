module.exports = SiblingRef;

const refSiblings = ['allOf', 'description', 'summary'];

function SiblingRef() {
    return {
        Schema(schema, {report, location, resolve}) {
            if (!('allOf' in schema) || schema.allOf.length !== 1 || Object.keys(schema).length === 1) {
                return;
            }

            for (const siblingKey in schema) {
                if (!refSiblings.includes(siblingKey)) {
                    return;
                }
            }

            // Discriminator schemas use allOf to define the parent schema
            const resolvedSchema = resolve(schema.allOf[0]);
            if ('discriminator' in resolvedSchema.node) {
                return false;
            }

            report({
                message: 'Schema allOf should be converted to sibling $ref',
                location: location,
            });
        },
    };
}