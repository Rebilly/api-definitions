const transaction = await api.transactions.get({id: 'foobar-001'});
console.log(transaction.fields.billingAddress.firstName);