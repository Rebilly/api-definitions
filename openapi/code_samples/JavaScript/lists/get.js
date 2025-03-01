// all parameters are optional
const firstCollection = await api.lists.getAll();

// alternatively you can specify one or more of them
const params = {limit: 20, offset: 100, sort: '-createdTime'};
const secondCollection = await api.lists.getAll(params);

// access the collection items, each item is a ValueList
secondCollection.items.forEach(list => console.log(list.fields.name));
