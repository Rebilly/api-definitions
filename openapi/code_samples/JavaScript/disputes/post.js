// first set the properties for the new dispute
const data = {
    transactionId: 'my-transaction-id',
    currency: 'USD',
    amount: 5,
    reasonCode: '1000',
    type: 'first-chargeback',
    status: 'response-needed',
    acquirerReferenceNumber: '143543',
    postedTime: '2017-09-19T20:46:48Z',
    deadlineTime: '2017-09-19T20:46:48Z'
};

// the ID is optional
const firstdispute = await api.disputes.create({data});

// or you can provide one
const secondDispute = await api.disputes.create({id: 'my-second-id', data});