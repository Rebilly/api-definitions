// all parameters are optional except for the `id`
const firstCollection = await api.customers
    .getAllTimelineMessages({id: 'my-customer'});

// alternatively you can specify one or more of them
const params = {id: 'my-customer', limit: 20, offset: 100};
const secondCollection = await api.customers.getAllTimelineMessages(params);

// access the collection items, each item is a Member
secondCollection.items
    .forEach(message => console.log(message.fields.eventType));