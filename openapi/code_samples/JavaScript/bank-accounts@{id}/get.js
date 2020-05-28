const bankAccount = await api.bankAccounts.get({id: 'foobar-001'});
console.log(bankAccount.fields.status);