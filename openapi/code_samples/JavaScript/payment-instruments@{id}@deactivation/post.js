const deactivatedInstrument = await api.paymentInstruments.deactivate({id: 'instrument-id-to-deactivate'});

console.log(deactivatedInstrument.fields)