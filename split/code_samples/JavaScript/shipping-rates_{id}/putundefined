// creating a new shipping rate
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


// updating a shipping rate
const data = {
  name: 'regular shipping',
  filter: '',
  price: 9.99,
  currency: 'USD'
};

const shippingRate = await api.shippingRates.update({id: 'my-second-key', data});
