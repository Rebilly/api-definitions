module.exports = ValidRoleTemplates

const seenOperations = new Set();

function registerOperations() {
    return (operation) => {
        seenOperations.add(operation.operationId);
    };
}

function hasValidRoleTemplates() {
    return (root, {report}) => {
        const roleTemplates = root['x-roleTemplates'];
        if (!root['x-roleTemplates']) return
        roleTemplates.forEach(role => {
            const roleId = role.id;
            const permissions = role.permissions;
            verifyAllPermissionsExist(roleId, permissions, seenOperations);
        });

        function verifyAllPermissionsExist(roleId, permissions, seenOperations) {
            permissions.forEach(permission => {
                if (!seenOperations.has(permission)) {
                    const errorMessage = `Permission ${permission} in role ${roleId} was not found within operation IDs`
                    report({message: errorMessage});
                }
            });
        }
    };
}

/** @type {import('@redocly/openapi-cli').OasRule} */
function ValidRoleTemplates() {
    return {
        Operation:  registerOperations(),
        DefinitionRoot: {
            leave: hasValidRoleTemplates(),
        },
    }
}
