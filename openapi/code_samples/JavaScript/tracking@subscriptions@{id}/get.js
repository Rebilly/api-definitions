const entry = await api.tracking.getSubscriptionLog({id: 'foobar-001'});
console.log(entry.fields.subscriptionId);