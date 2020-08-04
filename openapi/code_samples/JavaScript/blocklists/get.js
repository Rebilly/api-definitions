// all parameters are optional
const firstCollection = await api.blocklists.getAll();

// alternatively you can specify one or more of them
const params = {limit: 20, offset: 100, sort: '-createdTime'};
const secondCollection = await api.blocklists.getAll(params);

// access the collection items, each item is a Member
secondCollection.items.forEach(blocklistItem => console.log(blocklistItem.fields.status));
