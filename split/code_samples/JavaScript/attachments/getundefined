// all parameters are optional
const firstCollection = await api.files.getAllAttachments();

// alternatively you can specify one or more of them
const params = {limit: 20, offset: 100, sort: '-createdTime'}; 
const secondCollection = await api.files.getAllAttachments(params);

// access the collection items, each item is a Member
secondCollection.items.forEach(attachment => console.log(attachment.fields.relatedType));