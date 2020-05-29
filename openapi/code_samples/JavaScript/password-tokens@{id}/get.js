const token = await api.customerAuthentication.getResetPasswordToken({id: 'my-first-id'});
console.log(token.fields.credential);