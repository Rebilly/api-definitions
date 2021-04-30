module.exports = ValidRoleTemplates

const seenOperations = new Set();

const notRegisteredOperations = [
    // Legacy operations
    'PostSubscriptionLegacyCancellation',
    'PostSubscriptionPlanChange',
    'GetInvoiceItem',
    // Storefront does not added in `combined`
    'StorefrontGetAccount',
    'StorefrontPostRegister',
    'StorefrontPostLogin',
    'StorefrontPatchAccount',
    'StorefrontPatchAccountPassword',
    'StorefrontGetInvoiceCollection',
    'StorefrontGetInvoice',
    'StorefrontGetPlanCollection',
    'StorefrontGetPlan',
    'StorefrontGetProductCollection',
    'StorefrontGetProduct',
    'StorefrontGetTransactionCollection',
    'StorefrontGetTransaction',
    'StorefrontGetPlanCollection',
    'StorefrontGetPlan',
    'StorefrontGetProductCollection',
    'StorefrontGetProduct',
];

function registerOperations() {
    return (operation) => {
        seenOperations.add(operation.operationId);
    };
}

function hasValidRoleTemplates() {
    return (root, {report}) => {
        const roleTemplates = root['x-roleTemplates'];
        if (!roleTemplates) return
        roleTemplates.forEach(role => {
            const roleValue = role.value;
            const permissions = role.permissions;
            verifyAllPermissionsExist(roleValue, permissions, seenOperations);
        });

        function verifyAllPermissionsExist(roleValue, permissions, seenOperations) {
            permissions.forEach(permission => {
                if (notRegisteredOperations.includes(permission)) return;
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
