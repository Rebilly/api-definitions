// first set the required properties for the new checkout page
const data = {
    uriPath: 'my-first-checkout',
    name: 'Main checkout page',
    planId: 'my-plan-id',
    websiteId: 'my-website-id'
};

// the ID is optional
const firstKey = await api.checkoutPages.create({data});

// or you can provide one
const secondKey = await api.checkoutPages.create({id: 'my-second-id', data});