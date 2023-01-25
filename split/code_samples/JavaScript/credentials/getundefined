// all parameters are optional
const firstCollection = await api.customerAuthentication.getAllCredentials();

// alternatively you can specify one or more of them
const params = {limit: 20, offset: 100}; 
const secondCollection = await api.customerAuthentication.getAllCredentials(params);

// access the collection items, each item is a Member
secondCollection.items.forEach(credential => console.log(credential.fields.customerId));