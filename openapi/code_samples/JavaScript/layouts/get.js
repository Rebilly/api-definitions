// all parameters are optional
const firstCollection = await api.layouts.getAll();

// alternatively you can specify one or more of them
const params = {limit: 20, offset: 100}; 
const secondCollection = await api.layouts.getAll(params);

// access the collection items, each item is a Member
secondCollection.items.forEach(layout => console.log(layout.fields.name));