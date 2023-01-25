// first set the properties for the new webhook
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