// all parameters are optional
const firstCollection = await api.events.getAll();

// alternatively you can specify one or more of them
const params = {limit: 20, offset: 100}; 
const secondCollection = await api.events.getAll(params);

// access the collection items, each item is a Member
secondCollection.items.forEach(event => console.log(event.fields.eventType));