import axios from 'axios';
import fs from 'fs/promises';
import { parse, stringify } from 'yaml'
import set from "lodash/set.js"

const sourceUrl = 'https://www.rebilly.com/_spec/catalog/all.yaml';
const destinationFile = './openapi.yaml';

const response = await axios.get(sourceUrl);

const schema = parse(response.data);

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
    set(schema, path, definition);
})


await fs.writeFile(destinationFile, stringify(schema));
