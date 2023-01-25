// first set the properties for the new shipping rate
const data = {
    name: 'free shipping',
    filter: '',
    price: 0,
    currency: 'USD'
};

// the ID is optional
const firstRate = await api.shippingRates.create({data});

// or you can provide one
const secondRate = await api.shippingRates.create({id: 'my-second-key', data});
