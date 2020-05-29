const request = await api.account.resetSandbox();

// the request does not return any fields but
// you can confirm the success using the status code
console.log(request.response.status); // 204