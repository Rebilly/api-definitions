// first set the properties for the new subscription
const data = {
    customerId: 'foobar-0001',
    websiteId: 'my-main-website',
    items: [
        { planId: 'my-plan-id', quantity: '1' },
    ],
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