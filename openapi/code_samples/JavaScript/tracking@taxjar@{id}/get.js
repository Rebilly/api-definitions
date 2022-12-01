const entry = await api.tracking.getTaxJarLog({id: 'foobar-001'});
console.log(entry.fields.eventType);
