const paymentInstrument = await api.paymentInstruments.get({id: 'payment-instrument-id'});

console.log(paymentInstrument.fields.customerId);
