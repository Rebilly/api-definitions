const paymentInstrument = await api.paymentInstruments.deactivate({id: 'id-to-deactivate'});

console.log(paymentInstrument.fields.status);
