const order = await api.orderReactivations.get({id: 'foobar-001'});
console.log(order.fields.description);
