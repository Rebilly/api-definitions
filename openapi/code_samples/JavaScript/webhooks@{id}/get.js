const webhook = await api.webhooks.get({id: 'foobar-001'});
console.log(webhook.fields.id);