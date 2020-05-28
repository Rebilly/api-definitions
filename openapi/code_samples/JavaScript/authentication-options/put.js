// first set the properties for the authentication options
const data = {
    passwordPattern: null,
    credentialTtl: 10,
    authTokenTtl: 20,
    resetTokenTtl: 30
};

const options = await api.customerAuthentication.updateAuthOptions({data});
console.log(options.fields.credentialTtl);