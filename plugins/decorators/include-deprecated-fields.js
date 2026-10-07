const { has, set } = require('es-toolkit/compat')
module.exports = RemoveTagGroups;

/** @type {import('@redocly/cli').OasDecorator} */

function RemoveTagGroups() {
  return {
    Root: {
      leave(Root) {

        /*
         * Some fields in the API are returned for backwards compatibility,
         * but should not appear in the API definitions.
         * We manually add them here to the definitions so that the schema check does not fail
         */
        const hiddenDeprecatedProperties = [
          {
            path: 'components.schemas.Coupon.properties.redemptionCode',
            definition: {
              type: 'string',
            },
          },
          // The legacy payment instrument IDs, next to `paymentInstrumentId`
          // (`Customer::DEPRECATED_PAYMENT_INSTRUMENT_FIELDS` in core).
          ...['VaultedInstrument', 'Customer.properties.defaultPaymentInstrument'].flatMap((schema) =>
            ['paymentCardId', 'payPalAccountId', 'bankAccountId'].map((field) => ({
              path: `components.schemas.${schema}.properties.${field}`,
              definition: {
                type: 'string',
                deprecated: true,
              },
            })),
          ),
        ]

        hiddenDeprecatedProperties.forEach(({ path, definition }) => {
          // `set` creates a missing path, so a renamed or moved schema would
          // get an untyped object that accepts anything. Fail instead.
          const parent = path.split('.').slice(0, -1).join('.');
          if (!has(Root, parent)) {
            throw new Error(`include-deprecated-fields: ${parent} not found`);
          }
          set(Root, path, definition);
        })


      }
    }
  }
};
