// first set the properties for the activation
const data = {
    websiteId: 'my-main-website',
    // currency three letter code
    currency: 'USD',
    gatewayAccountId: 'my-main-gateway',
    amount: 12.99,
    redirectURLs: {
        success: 'https://www.acme.com/success',
        decline: 'https://www.acme.com/decline',
        cancel: 'https://www.acme.com/cancel',
        error: 'https://www.acme.com/error'
    }
};

const paypalAccount = await api.paypalAccounts.activate({id: 'my-second-key', data});