const shippingRate = await api.shippingRates.get({id: 'foobar-001'});
console.log(shippingRate.fields.name);
