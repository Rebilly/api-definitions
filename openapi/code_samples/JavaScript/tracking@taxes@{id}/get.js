const entry = await api.tracking.getTaxLog({id: 'foobar-001'});
console.log(entry.fields.eventType);
