const file = await api.files.download({id: 'my-file-id'});

// access the file ArrayBuffer to view the content 
console.log(file.data);