const paypalAccount = await api.paypalAccounts.get({id: 'foobar-001'});
console.log(paypalAccount.fields.customerId);