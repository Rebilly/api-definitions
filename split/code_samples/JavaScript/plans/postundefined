// first set the properties for the new plan
const data = {
    name: 'My strongest plan',
    currency: 'USD',
    setupAmount: 12.99,
    // you could also include a trial if needed
    recurringPeriodUnit: 'month',
    recurringPeriodLength: 1,
    recurringAmount: 25.99
};

// the ID is optional
const firstPlan = await api.plans.create({data});

// or you can provide one
const secondPlan = await api.plans.create({id: 'my-second-key', data});