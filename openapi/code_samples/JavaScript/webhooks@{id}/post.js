// creating a new webhook
const data = {
    // leave filter empty to enable 
    // the webhook for all events
    eventsFilter: [],
    status: 'active',
    method: 'POST',
    headers: {},
    url: 'https://hookb.in/Oe90ZRmdeWUGWg1MGKQV',
    // created prior to the test
    credentialHash: 'dcf6e32f2daee457a1db8ce5fdfbe200'
};

// the ID is optional
const firstWebhook = await api.webhooks.create({data});

// or you can provide one
const secondWebhook = await api.webhooks.create({id: 'my-second-key', data});



// updating a webhook
const data = {
    eventsFilter: ['suspended-payment-completed'],
    status: 'active',
    method: 'POST',
    headers: {},
    url: 'https://hookb.in/Oe90ZRmdeWUGWg1MGKQV',
    // created prior to the test
    credentialHash: 'dcf6e32f2daee457a1db8ce5fdfbe200'
};

const webhook = await api.webhooks.update({id: 'my-second-key', data});