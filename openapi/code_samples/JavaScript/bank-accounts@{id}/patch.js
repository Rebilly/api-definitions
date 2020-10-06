// properties to be updated
const data = {
    bankName: 'Your Fake Financial',
    accountType: 'savings',
    billingAddress: {
        firstName: 'John'
    }
};

api.bankAccounts.patch({id: 'id-to-update', data});
