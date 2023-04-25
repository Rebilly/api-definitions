const data = {
    subscriptionId: 'ord_01GYJPRKHBD6ZYHH897QCJMBS4',
    churnTime: '2020-06-10T13:55:51Z',
}

// the ID is optional
const firstSubscriptionCancellation = await api.subscriptionCancellations.create({data});

// or you can provide one
const secondSubscriptionCancellation = await api.subscriptionCancellations.create({id: 'custom-cancellation-id', data});
