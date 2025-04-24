// get the latest version
const latest = await api.lists.get({id: 'foobar-001'});

// get an older version
const older = await api.lists.get({id: 'foobar-001', version: 12});
