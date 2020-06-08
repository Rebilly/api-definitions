const entry = await api.tracking.getWebhookNotificationLog({id: 'foobar-001'});
console.log(entry.fields.eventName);