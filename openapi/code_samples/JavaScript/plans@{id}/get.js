const plan = await api.plans.get({id: 'foobar-001'});
console.log(plan.fields.name);