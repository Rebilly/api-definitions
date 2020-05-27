// creating a new shipping zone
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



// updating a shipping zone
const data = {
    name: 'normal shipping',
    rates: [
        {
            name: 'flat rate',
            price: 9.99,
            currency: 'USD'
        }
    ],
    // when null it will match any country
    countries: null
};

const shippingZone = await api.shippingZones.update({id: 'my-second-key', data});