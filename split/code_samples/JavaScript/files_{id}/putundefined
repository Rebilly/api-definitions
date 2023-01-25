// define the values to update
const data = {
    name: 'new file name',
    description: 'a fitting description',
    tags: ['original']
};

const file = await api.files.update({id: 'my-file-id', data});




// or, upload and update a file at the same time

// using a FileList to fetch a file
const fileObject = fileList[0];

// define file data
const data = {
    description: 'my new file',
    tags: ['original']
};

const addedFile = await api.files.uploadAndUpdate({fileObject, data});