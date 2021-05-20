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
        const roleTemplatesExtraOperationIds = root['x-roleTemplatesExtraOperationIds'];
        if (!roleTemplates) return
        roleTemplates.forEach(role => {
            const roleValue = role.value;
            const permissions = role.permissions;
            verifyAllPermissionsExist(roleValue, permissions, seenOperations);
        });

        function verifyAllPermissionsExist(roleValue, permissions, seenOperations) {
            permissions.forEach(permission => {
                if (roleTemplatesExtraOperationIds.includes(permission)) return;
                if (!seenOperations.has(permission)) {
                    const errorMessage = `Permission ${permission} in role ${roleValue} was not found within operation IDs`
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
