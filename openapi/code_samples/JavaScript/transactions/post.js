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
};

const transaction = await api.transactions.create({data});
