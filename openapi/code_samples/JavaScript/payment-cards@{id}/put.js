// first set the properties for the new payment card
const data = {
    pan: '4111111111111111',
    expYear: 2022,
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
    // we are adding a payment card
    customerId: 'foobar-0001'
};

// the ID is optional
const firstCard = await api.paymentCards.create({data});

// or you can provide one
const secondCard = await api.paymentCards.create({id: 'my-second-key', data});
