const xEnumMapping = 'x-enum-mapping';

function arrayMerge() {
    return [].concat(...arguments);
}

function getEnumValues(ctx, pointer, propertyName) {
    const possibleValues = traverse(ctx, pointer, `properties.${propertyName}.enum`);
    const disallowedValues = traverse(ctx, pointer, `properties.${propertyName}.not.enum`);

    return possibleValues.filter(val => disallowedValues.indexOf(val) === -1);
}

function resolve(ctx, pointer) {
    if (pointer.node && pointer.node.$ref) {
        const resolved = ctx.resolve(pointer.node, pointer.location.absolutePointer);
        if (!resolved.node) {
            throw `Can't resolve $ref ${pointer.node.$ref} from ${pointer.location.absolutePointer}`;
        }
        return resolved;
    }

    return pointer;
}

function traverse(ctx, pointer, path) {
    pointer = resolve(ctx, pointer);
    path = path.split('.');
    let key;
    const targets = [];
    while(key = path.shift()) {
        pointer = resolve(ctx, pointer);
        if (!pointer.node) {
            break;
        }
        if (pointer.node.allOf) {
            pointer.node.allOf.forEach(subnode => {
                subnode = resolve(ctx, {node: subnode, location: pointer.location});
                targets.push(traverse(ctx, subnode, [key, ...path].join('.')));
            });
        }
        if (!key in pointer.node) {
            break;
        }
        pointer = resolve(ctx, {node: pointer.node[key], location: pointer.location});
    }

    return arrayMerge(
        pointer.node && Array.isArray(pointer.node) ? pointer.node : [],
        ...targets,
    );
}

module.exports = {
    id: 'discriminator-mapper',
    preprocessors: {
        oas3: {
            'enum': () => ({
                Discriminator: {
                    enter(discriminator, ctx) {
                        if (!discriminator.hasOwnProperty(xEnumMapping)) {
                            return;
                        }
                        const mappingSources = discriminator[xEnumMapping] || [];
                        if (!Array.isArray(mappingSources) || mappingSources.length === 0) {
                            ctx.report({message: `Non-array ${xEnumMapping} provided`, location: ctx.location.child(xEnumMapping)});
                            return;
                        }
                        mappingSources.forEach((mappingSource, index) => {
                            const location = ctx.location.child([xEnumMapping, index]);
                            try {
                                const mapping = ctx.resolve(mappingSource);
                                if (!mapping.node || mapping.node.type !== 'object') {
                                    throw 'Non-object source supplied for enum discriminator mapping';
                                }
                                const valueLists = getEnumValues(ctx, mapping, discriminator.propertyName);
                                if (valueLists.length === 0) {
                                    throw 'Empty discriminator enum mapping provided';
                                }
                                discriminator.mapping = discriminator.mapping || {};
                                valueLists.forEach((enumValue) => {
                                    discriminator.mapping[enumValue] = mappingSource.$ref;
                                });
                            } catch (message) {
                                ctx.report({message, location});
                            }
                        });
                        delete discriminator[xEnumMapping];
                    },
                },
            }),
        },
    },
};
