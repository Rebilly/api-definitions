// all parameters are optional
const firstCollection = await api.tracking.getAllListsChangesHistory();

// alternatively you can specify one or more of them
const params = {limit: 20, offset: 100};
const secondCollection = await api.tracking.getAllListsChangesHistory(params);

// access the collection items, each item is a ValueList
secondCollection.items.forEach(entry => console.log(entry.fields.name));
