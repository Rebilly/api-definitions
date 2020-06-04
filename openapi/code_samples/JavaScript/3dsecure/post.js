// first set the properties for the new entry
const data = {
    customerId: 'foobar-001',
    websiteId: 'my-website-id',
    paymentCardId: 'a-certain-card-id',
    gatewayAccountId: 'main-gateway-id',
    enrolled: 'Y',
    // enrollment electronic 
    // commerce indicator
    enrollmentEci: 'abc',
    // electronic commerce indicator
    eci: 0,
    // cardholder authentication verification value
    cavv: '1234',
    // transaction Id
    xid: 'er9349gju09u40394guj',
    payerAuthResponseStatus: 'Y',
    signatureVerification: 'Y',
    amount: 12.99,
    currency: 'USD'
};

const entry = await api.threeDSecure.create({data});