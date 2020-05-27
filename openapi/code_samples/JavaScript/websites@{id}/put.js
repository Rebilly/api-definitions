// creating a new website
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



// updating a website
const data = {
    name: 'My website',
    url: 'https://www.acme.com',
    servicePhone: '15451234567',
    serviceEmail: 'support@acme.com',
    // used to build the checkout page URI,
    // this value would result in 
    // https://checkout.rebilly.com/acme-checkout/page
    checkoutPageUri: 'acme-checkout',
    customFields: {}
};

const website = await api.websites.update({id: 'my-second-key', data});