// all parameters are optional
const firstCollection = await api.invoices.getAll();

// alternatively you can specify one or more of them
const params = {limit: 20, offset: 100, sort: '-createdTime'}; 
const secondCollection = await api.invoices.getAll(params);

// access the collection items, each item is a Member
secondCollection.items.forEach(invoice => console.log(invoice.fields.firstName));



// alternatively, download as a CSV file
// all parameters are optional
const firstFile = await api.invoices.downloadCSV();

// alternatively you can specify one or more of them
const params = {limit: 20, offset: 100, sort: '-createdTime'}; 
const secondFile = await api.invoices.downloadCSV(params);

// access the file data to view the CSV content 
console.log(secondFile.data);