const entry = await api.tracking.getTaxTrackingLog({id: 'foobar-001'});
console.log(entry.fields.eventType);
