// all parameters are optional
const firstCollection = await api.checkoutPages.getAll();

// alternatively you can specify one or more of them
const params = {limit: 20, offset: 100, sort: '-createdTime'}; 
const secondCollection = await api.checkoutPages.getAll(params);

// access the collection items, each item is a Member
secondCollection.items.forEach(checkoutPage => console.log(checkoutPage.fields.status));