// first set the required properties for the new gateway account
const data = {
    gatewayName: 'RebillyProcessor',
    acquirerName: 'RebillyProcessor',
    merchantCategoryCode: 0,
    acceptedCurrencies: ['USD'],
    method: 'payment-card',
    paymentCardSchemes: [
        'Visa', 'MasterCard', 'American Express', 
        'Discover', 'Diners Club', 'JCB'
    ],
    // the gatewayConfig varies for each gateway name, 
    // see the API spec for details
    gatewayConfig: {},
};

// the ID is optional
const firstKey = await api.gatewayAccounts.create({data});

// or you can provide one
const secondKey = await api.gatewayAccounts.create({id: 'my-second-id', data});