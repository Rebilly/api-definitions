// all parameters are optional
const firstCollection = await api.disputes.getAll();

// alternatively you can specify one or more of them
const params = {limit: 20, offset: 100, sort: '-createdTime'}; 
const secondCollection = await api.disputes.getAll(params);

// access the collection items, each item is a Member
secondCollection.items.forEach(dispute => console.log(dispute.fields.transactionId));



// alternatively, you can get disputes as a CSV file
// all parameters are optional
const firstFile = await api.disputes.downloadCSV();

// alternatively you can specify one or more of them
const params = {limit: 20, offset: 100, sort: '-createdTime'}; 
const secondFile = await api.disputes.downloadCSV(params);

// access the file data to view the CSV content 
console.log(secondFile.data);