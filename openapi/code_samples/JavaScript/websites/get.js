// all parameters are optional
const firstCollection = await api.websites.getAll();

// alternatively you can specify one or more of them
const params = {limit: 20, offset: 100, sort: '-createdTime'}; 
const secondCollection = await api.websites.getAll(params);

// access the collection items, each item is a Member
secondCollection.items.forEach(website => console.log(website.fields.name));



// alternatively, download as a CSV file

// all parameters are optional
const firstFile = await api.websites.downloadCSV();

// alternatively you can specify one or more of them
const params = {limit: 20, offset: 100, sort: '-createdTime'}; 
const secondFile = await api.websites.downloadCSV(params);

// access the file data to view the CSV content 
console.log(secondFile.data);