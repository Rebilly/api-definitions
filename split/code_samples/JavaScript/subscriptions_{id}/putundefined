// creating a subscription
const data = {
    customerId: 'foobar-0001',
    websiteId: 'my-main-website',
    planId: 'my-plan-id',
    // you can append this subscription to
    // an existing invoice by passing its ID
    initialInvoiceId: 'my-existing-invoice-id',
    billingAddress: {
        firstName: 'Johnny',
        lastName: 'Brown',
        emails: [{
            label: 'main',
            value: 'johnny+test@grr.la',
            primary: true
        }],
    },
    deliveryAddress: {
        firstName: 'Johnny',
        lastName: 'Brown',
        emails: [{
            label: 'main',
            value: 'johnny+test@grr.la',
            primary: true
        }],
    },
    quantity: 1,
    customFields: {}
};

// the ID is optional
const firstInvoice = await api.subscriptions.create({data});

// or you can provide one
const secondInvoice = await api.subscriptions.create({id: 'my-second-id', data});



// updating a subscription
const data = {
    // determines if a payment attempt will be automatic
    autopay: false,
    // set the next renewal time
    renewalTime: '2018-09-26T15:34:29Z'
};

const subscription = await api.subscriptions.update({id: 'my-second-id', data});