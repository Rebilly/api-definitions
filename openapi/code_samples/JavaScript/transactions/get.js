// all parameters are optional
const firstCollection = await api.transactions.getAll();

// alternatively you can specify one or more of them
const params = {limit: 20, offset: 100, sort: '-createdTime'};
const secondCollection = await api.transactions.getAll(params);

// access the collection items, each item is a Transaction
secondCollection.items.forEach(transaction => console.log(transaction.fields.type));
