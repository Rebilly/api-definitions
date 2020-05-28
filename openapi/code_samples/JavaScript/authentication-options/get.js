const options = await api.customerAuthentication.getAuthOptions();
console.log(options.fields.credentialTtl);