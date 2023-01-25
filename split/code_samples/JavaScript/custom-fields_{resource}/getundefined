// all parameters except `resource` are optional
const firstCollection = await api.customFields.getAll({resource: 'customers'});

// alternatively you can specify one or more of them
const params = {resource: 'customers', limit: 20, offset: 100}; 
const secondCollection = await api.customFields.getAll(params);

// access the collection items, each item is a Member
secondCollection.items.forEach(customField => console.log(customField.fields.description));