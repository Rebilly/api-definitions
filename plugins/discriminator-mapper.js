function getEnumValues(ctx, node, propertyName) {
    return [].concat(...(traverse(ctx, node, `properties.${propertyName}.enum`) || []));
}

function maybeResolve({resolve}, node) {
    if (node && node.$ref) {
        if (!resolve(node).node) {
            console.error('Can\'t resolve node', node, resolve(node));
        }
        return resolve(node).node;
    }

    return node;
}

function traverse({resolve}, node, path) {
    node = maybeResolve({resolve}, node);
    console.log('traversing node', node, path);
    path = path.split('.');
    let key;
    const targets = [];
    while(key = path.shift()) {
        console.log('traversing key', node, key, path.join('.'));
        node = maybeResolve({resolve}, node);
        if (!node) {
            break;
        }
        if (node.allOf) {
            console.log('traversing allOf', node.allOf);
            node.allOf.forEach(subnode => {
                subnode = maybeResolve({resolve}, subnode);
                targets.push(traverse({resolve}, subnode, path.join('.')));
            });
        }
        if (!key in node) {
            break;
        }
        node = maybeResolve({resolve}, node[key]);
        
    }
    return [].concat(...targets);
}

module.exports = {
    id: 'discriminator-mapper',
    preprocessors: {
        oas3: {
            'enum': () => ({
                Discriminator: {
                    leave(discriminator, ctx) {
                        const mappingSources = discriminator['x-enum-mapping'] || [];
                        if (!Array.isArray(mappingSources) || mappingSources.length === 0) {
                            return;
                        }
                        const test = ctx.resolve({$ref: '../../PaymentMethods/AlternativePaymentMethods.yaml'});
                        console.log('Resolving ref that exists within the definition, but not at the discriminator location', test);
                        mappingSources.forEach(mappingSource => {
                            const {node} = ctx.resolve(mappingSource);
                            if (!node || node.type !== 'object') {
                                ctx.report({message: `Non-object source supplied for enum discriminator mapping`})
                                return;
                            }
                            const valueLists = [
                                getEnumValues(ctx, node, discriminator.propertyName),
                            ];
                            (node.allOf || []).forEach(allOfSchema => {
                                valueLists.push(getEnumValues(ctx, allOfSchema, discriminator.propertyName));
                            });
                            ctx.report({message: `Found ${JSON.stringify(valueLists)}`});
                        });
                    },
                }
            })
        }
    }
}