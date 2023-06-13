// type is required, other parameters are optional
const firstCollection = await api.serviceCredentials.getAll({type: 'webhook'});

// alternatively you can specify one or more of them
const params = {type: 'webhook', limit: 20, offset: 100};
const secondCollection = await api.serviceCredentials.getAll(params);

// access the collection items, each item is a ServiceCredential
secondCollection.items.forEach(serviceCredential => console.log(serviceCredential.fields.status));
