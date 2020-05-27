const token = 'dcf6e32f2daee457a1db8ce5fdfbe200';
const request = await api.customerAuthentication.logout({token});

// the request does not return any fields but
// you can confirm the success using the status code
console.log(request.response.status); // 204