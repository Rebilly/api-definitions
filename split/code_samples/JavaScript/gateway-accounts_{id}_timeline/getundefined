// all parameters are optional except for the `id`
const firstCollection = await api.gatewayAccounts
    .getAllTimelineMessages({id: 'my-gateway'});

// alternatively you can specify one or more of them
const params = {id: 'my-gateway', limit: 20, offset: 100};
const secondCollection = await api.gatewayAccounts.getAllTimelineMessages(params);

// access the collection items, each item is a Member
secondCollection.items
    .forEach(message => console.log(message.fields.eventType));