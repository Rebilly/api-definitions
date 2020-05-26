const bankAccount = await api.bankAccounts.deactivate({id: 'id-to-deactivate'});

// the bank account status will be updated to reflect the modification
console.log(bankAccount.fields.status);