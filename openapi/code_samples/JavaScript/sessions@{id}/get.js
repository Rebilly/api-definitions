const session = await api.sessions.get({id: 'foobar-001'});
console.log(session.fields.name);