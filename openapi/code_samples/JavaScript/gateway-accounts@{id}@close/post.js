const gatewayAccount = await api.gatewayAccounts.close({id: 'foobar-001'});
console.log(gatewayAccount.fields.status);