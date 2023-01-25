// creating a customer
const data = {
    primaryAddress: {
        firstName: 'John',
        lastName: 'Doe',
        emails: [{
            label: 'main',
            value: 'john.doe+test@grr.la',
            primary: true
        }],
    }
};

// the ID is optional
const firstCustomer = await api.customers.create({data});

// or you can provide one
const secondCustomer = await api.customers.create({id: 'my-second-id', data});



// updating a customer
const data = {
    primaryAddress: {
        firstName: 'Johnny',
        lastName: 'Doe',
        emails: [{
            label: 'main',
            value: 'johnny.doe+test@grr.la',
            primary: true
        }],
    }
};

const customer = await api.customers.update({id: 'my-second-id', data});