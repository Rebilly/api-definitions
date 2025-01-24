// all parameters are optional
const firstCollection = await api.websites.getAll();

// alternatively you can specify one or more of them
const params = {limit: 20, offset: 100, sort: '-createdTime'};
const secondCollection = await api.websites.getAll(params);

// access the collection items, each item is a Website
secondCollection.items.forEach(website => console.log(website.fields.name));
