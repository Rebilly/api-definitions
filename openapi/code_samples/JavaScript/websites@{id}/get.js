const website = await api.websites.get({id: 'foobar-001'});
console.log(website.fields.name);