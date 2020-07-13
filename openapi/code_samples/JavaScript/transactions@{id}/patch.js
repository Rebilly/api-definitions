// first set the custom fields to update for the transaction
const data = {
    customFields: {
        'myCustomField': 'myCustomData',
        'myOtherField': 'myOtherData',        
    }
};

const transaction = await api.transactions.patch({id: 'my-transaction-id', data});
