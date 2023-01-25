// all parameters are optional except for the `id`
const firstCollection = await api.subscriptions
    .getAllTimelineMessages({id: 'my-transaction'});

// alternatively you can specify one or more of them
const params = {id: 'my-transaction', limit: 20, offset: 100};
const secondCollection = await api.subscriptions.getAllTimelineMessages(params);

// access the collection items, each item is a Member
secondCollection.items
    .forEach(message => console.log(message.fields.eventType));