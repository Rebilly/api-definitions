const shippingZone = await api.shippingZones.get({id: 'foobar-001'});
console.log(shippingZone.fields.name);