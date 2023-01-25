// all parameters are optional except for the `id`
const firstCollection = await api.gatewayAccounts.getAllDowntimeSchedules({id: 'my-gateway'});

// alternatively you can specify one or more of them
const params = {id: 'my-gateway', limit: 20, offset: 100};
const secondCollection = await api.gatewayAccounts.getAllDowntimeSchedules(params);

// access the collection items, each item is a Member
secondCollection.items
    .forEach(gatewayAccount => console.log(gatewayAccount.fields.reason));