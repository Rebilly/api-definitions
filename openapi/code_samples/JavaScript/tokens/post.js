// first set the properties for the new payment token
const data = {
    method: 'payment-card',
    paymentInstrument: {
        pan: '4111111111111111',
        expYear: 2022,
        expMonth: 12,
        cvv: 123
    },
    billingAddress: {
      firstName: 'Johnny',
      lastName: 'Brown',
      emails: [{
          label: 'main',
          value: 'johnny+test@grr.la',
          primary: true
      }]  
    }
};

const token = await api.paymentTokens.create({data});