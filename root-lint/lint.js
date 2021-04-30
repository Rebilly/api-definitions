/**
 * Lint checks not supported by Redoc (https://redoc.ly/docs/cli/custom-rules/)
 * For example, when we need to parse the whole schema to look for the whole list of operation Ids
 */

// We can use js-yaml because it is included in @redocly/openapi-cli
const yaml = require('js-yaml');
const fs   = require('fs');

console.log('🤖 Checking x-roleTemplates permissions')

const combinedSchema = readDistYaml();
const roleTemplates = combinedSchema['x-roleTemplates'];
const allOperationIds = listAllOperationIds(combinedSchema);
roleTemplates.forEach(role => {
    const roleId = role.id;
    const permissions = role.permissions;
    verifyAllPermissionsExist(roleId, permissions, allOperationIds);
});

console.log('🎉 All your role permissions exist!')

function readDistYaml() {
    return yaml.load(fs.readFileSync('./dist/combined.yaml', 'utf8'));
}

function verifyAllPermissionsExist(roleId, permissions, allOperationIds) {
    permissions.forEach(permission => {
        if (!allOperationIds.includes(permission)) {
            const errorMessage = `Permission ${permission} in role ${roleId} was not found within dist/combined.yaml operation IDs`
            throw Error(errorMessage);
        }
    });
}

function listAllOperationIds(combinedSchema) {
    return Object.values(combinedSchema.paths).reduce((allOperations, path) => {
        allOperations = [...allOperations, ...listOperationIdsFromPath(path)];
        return allOperations;
    }, []);
}

function listOperationIdsFromPath(path) {
    const operationIds = [];
    const verbs = ['get', 'put', 'post', 'delete', 'patch'];
    verbs.forEach(verb => {
        if (path[verb]) operationIds.push(path[verb].operationId);
    })
    return operationIds;
}
