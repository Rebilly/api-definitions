// all parameters are optional
const firstCollection = await api.paymentInstruments.getAll();

// alternatively you can specify one or more of them
const params = {limit: 20, offset: 100, sort: '-createdTime'};
const secondCollection = await api.paymentInstruments.getAll(params);

// access the collection items, each item is a Member
secondCollection.items.forEach(paymentInstrument => console.log(paymentInstrument.fields.customerId));
