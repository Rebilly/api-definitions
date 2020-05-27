const entry = await api.tracking.getWebhookTrackingLog({id: 'foobar-001'});
console.log(entry.fields.eventType);