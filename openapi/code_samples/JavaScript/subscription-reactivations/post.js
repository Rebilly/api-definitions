const data = {
    subscriptionId: 'ord_01GYJPRKHBD6ZYHH897QCJMBS4',
    description: 'reactivation-reason',
    effectiveTime: '2020-06-10T13:55:51Z',
    renewalTime: '2020-07-10T13:55:51Z'
};

const reactivatedSubscription = await api.subscriptionReactivations.reactivate({data});
