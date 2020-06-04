// first set the properties for the new transaction
const data = {
    customerId: 'foobar-0001',
    websiteId: 'my-main-website',
    paymentInstrument: {
        method: 'payment-card',
        paymentCardId: 'my-payment-card-id',
        gatewayAccountId: 'my-gateway-account-id'
    },
    currency: 'USD',
    amount: 12.99,
    description: 'manual transaction',

    // optionally you can specify a scheduled time
    // to process the transaction at a later date
    // scheduledTime: '2017-09-28T16:13:44Z'
};

// the ID is optional
const firstTransaction = await api.transactions.create({data});

// or you can provide one
const secondTransaction = await api.transactions.create({id: 'my-second-id', data});