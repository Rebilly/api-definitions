// creating a new website
const data = {
    name: 'My website',
    url: 'https://www.acme.com',
    servicePhone: '15451234567',
    serviceEmail: 'support@acme.com',
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
    customFields: {}
};

const website = await api.websites.update({id: 'my-second-key', data});
