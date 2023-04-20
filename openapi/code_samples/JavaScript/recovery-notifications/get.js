// all parameters are optional
const firstCollection = await api.recoveryNotifications.getAll();

// alternatively you can specify one or more of them
const params = {limit: 20, offset: 100, sort: 'timeDelta'};
const secondCollection = await api.recoveryNotifications.getAll(params);

// access the collection items, each item is a Member
secondCollection.items.forEach(recoveryNotification => console.log(recoveryNotification.fields.title));
