module.exports = ValidRoleTemplates

const seenOperations = new Set();
let seenPermissions = new Set();

function registerOperations() {
    return (operation, {report}) => {
        const validateOperationAppearsInPermissions = (operationId) => {
            if (!seenPermissions.has(operationId)) {
                report({message: `OperationId ${operationId} not found in x-roleTemplates`})
            }
        }
        
        seenOperations.add(operation.operationId);
        // validateOperationAppearsInPermissions(operation.operationId);
    };
}

function registerPermissions() {
    return (root) => {
        const roleTemplates = root['x-roleTemplates'];
        if (!roleTemplates) return

        roleTemplates.forEach(role => {
            const rolePermissions = new Set(role.permissions);
            seenPermissions = new Set([...seenPermissions, ...rolePermissions]);
        });
    };
}

function hasValidRoleTemplates() {
    return (root, {report}) => {
        const roleTemplates = root['x-roleTemplates'];
        if (!roleTemplates) return
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
            enter: registerPermissions(),
            leave: hasValidRoleTemplates(),
        },
    }
}
