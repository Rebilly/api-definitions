const mfa = await api.users.get({id: 'foobar-001'});
console.log(mfa.fields.status, mfa.fields.type, mfa.fields.lastAuthTime);
