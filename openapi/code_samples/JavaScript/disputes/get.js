// all parameters are optional
const firstCollection = await api.disputes.getAll();

// alternatively you can specify one or more of them
const params = {limit: 20, offset: 100, sort: '-createdTime'};
const secondCollection = await api.disputes.getAll(params);

// access the collection items, each item is a Dispute
secondCollection.items.forEach(dispute => console.log(dispute.fields.transactionId));
