const entry = await api.threeDSecure.get({id: 'foobar-001'});
console.log(entry.fields.customerId);