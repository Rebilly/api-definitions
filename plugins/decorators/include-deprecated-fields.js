const { get, has, set } = require('es-toolkit/compat')
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
        // One entry for each field of `fields` under `components.schemas.<schema>.properties`,
        // marked `deprecated` and merged with `extra`.
        const deprecatedFields = (schema, fields, extra = {}) =>
          Object.entries(fields).map(([field, definition]) => ({
            path: `components.schemas.${schema}.properties.${field}`,
            definition: { ...definition, ...extra, deprecated: true },
          }));

        // The definition of a documented field, for a deprecated copy of it.
        const sameAs = (path) => {
          const allOf = get(Root, `${path}.allOf`);
          if (!allOf) {
            throw new Error(`include-deprecated-fields: ${path}.allOf not found`);
          }
          return { allOf: structuredClone(allOf) };
        };

        const legacyPaymentInstrumentIds = {
          paymentCardId: { type: 'string' },
          payPalAccountId: { type: 'string' },
          bankAccountId: { type: 'string' },
        };

        const hiddenDeprecatedProperties = [
          {
            path: 'components.schemas.Coupon.properties.redemptionCode',
            definition: {
              type: 'string',
            },
          },
          // The legacy payment instrument IDs, next to `paymentInstrumentId`
          // (`Customer::DEPRECATED_PAYMENT_INSTRUMENT_FIELDS` in core).
          ...deprecatedFields('VaultedInstrument', legacyPaymentInstrumentIds),
          ...deprecatedFields('Customer.properties.defaultPaymentInstrument', legacyPaymentInstrumentIds),
          // `TransactionTransformer::appendDeprecatedValues` in core.
          ...deprecatedFields(
            'Transaction',
            {
              scheduledTime: { type: 'string', format: 'date-time' },
              gatewayResponse: { type: ['string', 'null'] },
              customer: sameAs('components.schemas.Transaction.properties.customerId'),
              website: sameAs('components.schemas.Transaction.properties.websiteId'),
              paymentCardId: { type: 'string' },
              paymentCard: { type: 'string' },
              retryInstruction: { type: 'null' },
              retriesResult: { type: 'null' },
              retriedTransactionId: { type: 'null' },
              hasBumpOffer: { const: false },
              bumpOffer: { type: 'null' },
            },
            { readOnly: true },
          ),
        ]

        hiddenDeprecatedProperties.forEach(({ path, definition }) => {
          // `set` creates a missing path, so a renamed or moved schema would
          // get an untyped object that accepts anything. Fail instead.
          const parent = path.split('.').slice(0, -1).join('.');
          if (!has(Root, parent)) {
            throw new Error(`include-deprecated-fields: ${parent} not found`);
          }
          // A field the schema already declares keeps its real definition;
          // replacing it with a stub would weaken the check without notice.
          if (has(Root, path)) {
            throw new Error(`include-deprecated-fields: ${path} is already declared`);
          }
          set(Root, path, definition);
        })


      }
    }
  }
};
