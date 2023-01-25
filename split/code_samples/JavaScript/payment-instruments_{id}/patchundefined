// payment instrument properties to be updated
const data = {
    cvv: '123',
    expMonth: 12,
    expYear: 2025,
    billingAddress: {
        firstName: 'John'
    }
};

api.paymentInstruments.patch({id: 'id-to-update', data});

// alternatively you can specify a partial token
const tokenData = {
    token: 'partial-token',
    billingAddress: {
        firstName: 'John'
    },
    customFields: {
        foo: 'bar'
    }
};

api.paymentInstruments.patch({id: 'id-to-update', tokenData});
