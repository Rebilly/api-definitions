// all parameters are optional
const firstCollection = await api.plans.getAll();

// alternatively you can specify one or more of them
const params = {limit: 20, offset: 100, sort: '-createdTime'};
const secondCollection = await api.plans.getAll(params);

// access the collection items, each item is a Plan
secondCollection.items.forEach(plan => console.log(plan.fields.name));
