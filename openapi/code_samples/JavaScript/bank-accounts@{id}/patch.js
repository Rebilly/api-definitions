// properties to be updated
const data = {
    bankName: 'Your Fake Financial',
    accountType: 'savings',
    address: {
        firstName: 'John'
    }
};

api.bankAccounts.patch({id: 'id-to-update', data});