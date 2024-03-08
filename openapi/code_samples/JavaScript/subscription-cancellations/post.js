const data = {
    subscriptionId: 'sub_01HRF27SATGE4Z6PBJE6PD8328',
    churnTime: '2020-06-10T13:55:51Z',
}

// the ID is optional
const firstSubscriptionCancellation = await api.subscriptionCancellations.create({data});

// or you can provide one
const secondSubscriptionCancellation = await api.subscriptionCancellations.create({id: 'custom-cancellation-id', data});
