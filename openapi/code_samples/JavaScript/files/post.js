// using a FileList to fetch a file
const fileObject = fileList[0];

const addedFile = await api.files.upload({fileObject});




// or, upload and update a file at the same time

// define file data
const data = {
    description: 'my new file',
    tags: ['original']
};

const updatedFile = await api.files.uploadAndUpdate({fileObject, data});
