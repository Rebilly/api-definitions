// first set the properties for the new website
const data = {
    name: 'My website',
    url: 'https://www.acme.com',
    servicePhone: '15451234567',
    serviceEmail: 'support@acme.com',
    // used to build the checkout page URI,
    // this value would result in 
    // https://checkout.rebilly.com/acme/page
    checkoutPageUri: 'acme',
    customFields: {}
};

// the ID is optional
const firstWebsite = await api.websites.create({data});

// or you can provide one
const secondWebsite = await api.websites.create({id: 'my-second-key', data});