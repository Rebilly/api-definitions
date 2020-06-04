const gatewayAccount = await api.gatewayAccounts.enable({id: 'foobar-001'});
console.log(gatewayAccount.fields.status);