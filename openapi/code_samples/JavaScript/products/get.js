// all parameters are optional
const firstCollection = await api.products.getAll();

// alternatively you can specify one or more of them
const params = {limit: 20, offset: 100, sort: '-createdTime'}; 
const secondCollection = await api.products.getAll(params);

// access the collection items, each item is a Member
secondCollection.items.forEach(product => console.log(product.fields.name));