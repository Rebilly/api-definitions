// all parameters are optional
const firstCollection = await api.tracking.getAll();

// alternatively you can specify one or more of them
const params = {limit: 20, offset: 100}; 
const secondCollection = await api.tracking.getAll(params);

// access the collection items, each item is a Member
secondCollection.items.forEach(entry => console.log(entry.fields.customerId));



// alternatively, download as a CSV file

// all parameters are optional
const firstFile = await api.tracking.downloadApiLogsCSV();

// alternatively you can specify one or more of them
const params = {limit: 20, offset: 100, sort: '-createdTime'}; 
const secondFile = await api.tracking.downloadApiLogsCSV(params);

// access the file data to view the CSV content 
console.log(secondFile.data);