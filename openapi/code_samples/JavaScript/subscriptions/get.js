// all parameters are optional
const firstCollection = await api.subscriptions.getAll();

// alternatively you can specify one or more of them
const params = {limit: 20, offset: 100, sort: '-createdTime'}; 
const secondCollection = await api.subscriptions.getAll(params);

// access the collection items, each item is a Member
secondCollection.items.forEach(subscription => console.log(subscription.fields.customerId));



// alternatively, download as CSV file

// all parameters are optional
const firstFile = await api.subscriptions.downloadCSV();

// alternatively you can specify one or more of them
const params = {limit: 20, offset: 100, sort: '-createdTime'}; 
const secondFile = await api.subscriptions.downloadCSV(params);

// access the file data to view the CSV content 
console.log(secondFile.data);