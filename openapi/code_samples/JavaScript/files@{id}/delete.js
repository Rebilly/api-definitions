// simply delete a file
const deleteRequest = await api.files.delete({id: 'my-file-id'});

// the request does not return any fields but
// you can confirm the success using the status code
console.log(deleteRequest.response.status); // 204




// or, delete a file and its related resource attachments
// use this method to remove the file completely from all resources at once.

const detachRequest = await api.files.detachAndDelete({id: 'my-file-id'});

// the request does not return any fields but
// you can confirm the success using the status code
console.log(detachRequest.response.status); // 204
