// first set the properties for the new payment card instrument
const data = {
    method: 'payment-card',
    pan: '4111111111111111',
    expYear: 2025,
    expMonth: 11,
    cvv: '123',
    billingAddress: {
      firstName: 'Johnny',
      lastName: 'Brown',
      emails: [{
          label: 'main',
          value: 'johnny+test@grr.la',
          primary: true
      }]
    },
    // the customer ID for which
    // we are adding a payment card instrument
    customerId: 'foobar-0001'
};

const firstPaymentInstrument = await api.paymentInstruments.create({data});

// alternatively you can specify a payment token
const tokenData = {
    token: 'payment-token',
    // the customer ID for which
    // we are adding a payment card instrument
    customerId: 'foobar-0001'
};

const secondPaymentInstrument = await api.paymentInstruments.create({tokenData});
