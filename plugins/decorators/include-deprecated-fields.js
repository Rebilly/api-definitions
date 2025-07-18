const set = require('lodash.set')
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
          {
            path: 'components.schemas.VaultedInstrument.properties.paymentCardId',
            definition: {
              type: 'string',
            },
          },
          {
            path: 'components.schemas.VaultedInstrument.properties.payPalAccountId',
            definition: {
              type: 'string',
            },
          },
          {
            path: 'components.schemas.VaultedInstrument.properties.bankAccountId',
            definition: {
              type: 'string',
            },
          },
        ]

        hiddenDeprecatedProperties.forEach(({path, definition}) => {
          set(Root, path, definition);
        })


      }
    }
  }
};
