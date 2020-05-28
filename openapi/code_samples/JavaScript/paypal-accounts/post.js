// first set the properties for the new paypal account
const data = {
    username: 'myPaypalUser',
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
    // we are adding a paypal account
    customerId: 'foobar-0001'
};

// the ID is optional
const firstCard = await api.paypalAccounts.create({data});

// or you can provide one
const secondCard = await api.paypalAccounts.create({id: 'my-second-key', data});