const message = await api.customers
    .getTimelineMessage({id: 'foobar-001', messageId: 'message-202'});
console.log(message.fields.eventType);