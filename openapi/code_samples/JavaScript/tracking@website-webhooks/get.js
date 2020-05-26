// all parameters are optional
const firstCollection = await api.tracking.getAllWebhookNotificationLogs();

// alternatively you can specify one or more of them
const params = {limit: 20, offset: 100}; 
const secondCollection = await api.tracking.getAllWebhookNotificationLogs(params);

// access the collection items, each item is a Member
secondCollection.items.forEach(entry => console.log(entry.fields.eventName));