// all parameters are optional
const firstCollection = await api.shippingRates.getAll();

// alternatively you can specify one or more of them
const params = {limit: 20, offset: 100, sort: '-createdTime'};
const secondCollection = await api.shippingRates.getAll(params);

// access the collection items, each item is a ShippingRate
secondCollection.items.forEach(shippingRate => console.log(shippingRate.fields.name));
