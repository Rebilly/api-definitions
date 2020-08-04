const blacklistItem = await api.blacklists.get({id: 'foobar-001'});
console.log(blacklistItem.fields.status);