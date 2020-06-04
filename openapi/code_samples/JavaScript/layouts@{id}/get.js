const layout = await api.layouts.get({id: 'foobar-001'});
console.log(layout.fields.description);