// all parameters are optional
const firstCollection = await api.paymentTokens.getAll();

// alternatively you can specify one or more of them
const params = {limit: 20, offset: 100}; 
const secondCollection = await api.paymentTokens.getAll(params);

// access the collection items, each item is a Member
secondCollection.items.forEach(paymentToken => console.log(paymentToken.fields.id));