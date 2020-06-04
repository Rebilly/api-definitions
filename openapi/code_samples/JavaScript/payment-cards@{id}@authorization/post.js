// first set the properties for the authorization
const data = {
    websiteId: 'my-main-website',
    // currency three letter code
    currency: 'USD',
    gatewayAccountId: 'my-main-gateway',
    amount: 12.99
};

const paymentCard = await api.paymentCards.authorize({id: 'my-second-key', data});