// all parameters are optional
const firstCollection = await api.transactions.getAll();

// alternatively you can specify one or more of them
const params = {limit: 20, offset: 100, sort: '-createdTime'}; 
const secondCollection = await api.transactions.getAll(params);

// access the collection items, each item is a Member
secondCollection.items.forEach(transaction => console.log(transaction.fields.type));



// alternatively, download as a CSV file

// all parameters are optional
const firstFile = await api.transactions.downloadCSV();

// alternatively you can specify one or more of them
const params = {limit: 20, offset: 100, sort: '-createdTime'}; 
const secondFile = await api.transactions.downloadCSV(params);

// access the file data to view the CSV content 
console.log(secondFile.data);