const data = {
    subscriptionId: '4f6cf35x-2c4y-483z-a0a9-158621f77a21',
    description: 'reactivation-reason',
    effectiveTime: '2020-06-10T13:55:51Z',
    renewalTime: '2020-07-10T13:55:51Z'
};

const reactivatedSubscription = await api.subscriptionReactivations.reactivate({data});
