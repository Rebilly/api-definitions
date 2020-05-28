// creating an invoice
const data = {
    customerId: 'foobar-0001',
    websiteId: 'my-main-website',
    currency: 'USD',
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
    notes: `customer's first invoice`,
};

// the ID is optional
const firstInvoice = await api.invoices.create({data});

// or you can provide one
const secondInvoice = await api.invoices.create({id: 'my-second-id', data});



// updating an invoice
const data = {
    customerId: 'foobar-0001',
    websiteId: 'my-main-website',
    currency: 'USD',
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
    notes: `customer's first invoice`,
};

const invoice = await api.invoices.update({id: 'my-second-id', data});