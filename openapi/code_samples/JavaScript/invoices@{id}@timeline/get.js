// all parameters are optional except for the `id`
const firstCollection = await api.invoices
    .getAllTimelineMessages({id: 'my-invoice'});

// alternatively you can specify one or more of them
const params = {id: 'my-invoice', limit: 20, offset: 100};
const secondCollection = await api.invoices.getAllTimelineMessages(params);

// access the collection items, each item is an InvoiceTimeline
secondCollection.items
    .forEach(message => console.log(message.fields.eventType));
