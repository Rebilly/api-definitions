const status = await api.status.get({id: 'foobar-001'});
console.log(status.fields.status);