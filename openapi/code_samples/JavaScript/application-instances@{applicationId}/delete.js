const request = await api.applicationInstances.delete({applicationId: 'applicationId'});

// the request does not return any fields but
// you can confirm the success using the status code
console.log(request.response.status); // 204
