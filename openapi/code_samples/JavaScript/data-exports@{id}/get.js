const queuedExport = await api.exports.get({resource: 'transaction', id: 'foobar-001'});
console.log(queuedExport.fields.status);