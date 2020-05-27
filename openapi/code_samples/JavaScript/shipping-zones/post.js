// first set the properties for the new shipping zone
const data = {
    name: 'free shipping',
    rates: [
        {
            name: 'free shipping',
            price: 0,
            currency: 'USD'
        }
    ],
    countries: ['US']
};

// the ID is optional
const firstZone = await api.shippingZones.create({data});

// or you can provide one
const secondZone = await api.shippingZones.create({id: 'my-second-key', data});