module.exports = HasSDKOperationName

function requiredSdkOperationName() {
    return (operation, {report, location, parent, type}) => {
        //Skip webhook operations validation
        if (location.source.absoluteRef.includes('/openapi/webhooks/') || location.pointer.includes('x-webhooks')) return;

        //Skip experimental operations validation
        if (parent.servers && parent.servers[0].url === 'https://api.rebilly.com/experimental') return;

        if (!operation['x-sdk-operation-name']) {
            report({message: `${operation.operationId} operation is missing required x-sdk-operation-name property`});
        }
    };
}

/** @type {import('@redocly/openapi-cli').OasRule} */
function HasSDKOperationName() {
    return {
        Operation: requiredSdkOperationName(),
    }
}
