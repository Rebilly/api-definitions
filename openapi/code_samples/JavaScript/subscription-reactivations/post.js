const data = {
    subscriptionId: 'sub_01HRF27SATGE4Z6PBJE6PD8328',
    description: 'reactivation-reason',
    effectiveTime: '2020-06-10T13:55:51Z',
    renewalTime: '2020-07-10T13:55:51Z'
};

const reactivatedSubscription = await api.subscriptionReactivations.reactivate({data});
