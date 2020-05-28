const transaction = await api.transactions.cancel({id: 'my-second-id', data});
console.log(transaction.fields.status);