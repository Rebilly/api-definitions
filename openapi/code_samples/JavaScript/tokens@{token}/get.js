const paymentToken = await api.paymentTokens.get({id: 'foobar-001'});
console.log(paymentToken.fields.method);