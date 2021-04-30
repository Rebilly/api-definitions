module.exports = HasUniqueSdkOperationName

function requiredSdkOperationName() {
    const seenOperationNames = new Set();

    return (operation, {report, location, parent, type}) => {
        //Skip webhook operations validation
        if (location.source.absoluteRef.includes('/openapi/webhooks/')) return;

        //Skip experimental operations validation
        if (parent.servers && parent.servers[0].url === 'https://api.rebilly.com/experimental') return;

        if (!operation['x-sdk-operation-name']) {
            report({message: `${operation.operationId} operation is missing required x-sdk-operation-name property`});
        }
        if (seenOperationNames.has(operation['x-sdk-operation-name'])) {
            report({
                message: 'Every operation must have a unique `x-sdk-operation-name`.',
                location: location.child([operation.operationId]),
            });
        }
        seenOperationNames.add(operation['x-sdk-operation-name']);
    };
}

/** @type {import('@redocly/openapi-cli').OasRule} */
function HasUniqueSdkOperationName() {
    return {
        Operation: requiredSdkOperationName(),
    }
}
