// all parameters are optional
const firstCollection = await api.customers.getAll();

// alternatively you can specify one or more of them
const params = {limit: 20, offset: 100, sort: '-createdTime'}; 
const secondCollection = await api.customers.getAll(params);

// access the collection items, each item is a Member
secondCollection.items.forEach(customer => console.log(customer.fields.primaryAddress.firstName));



// alternatively you can get the collection as a CSV

// all parameters are optional
const firstFile = await api.customers.downloadCSV();

// alternatively you can specify one or more of them
const params = {limit: 20, offset: 100, sort: '-createdTime'}; 
const secondFile = await api.customers.downloadCSV(params);

// access the file data to view the CSV content 
console.log(secondFile.data);