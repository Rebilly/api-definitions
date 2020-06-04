const user = await api.users.get({id: 'foobar-001'});
console.log(user.fields.firstName);