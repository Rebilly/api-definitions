// first set the required properties for the new bank account
const data = {
    bankName: 'My Fake Financial',
    routingNumber: '12345678',
    accountNumber: '12345678',
    accountType: 'checking',
    customerId: 'acme-001'
};

// the ID is optional
const firstKey = await api.bankAccounts.create({data});

// or you can provide one
const secondKey = await api.bankAccounts.create({id: 'my-second-id', data});