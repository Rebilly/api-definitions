const credential = await api.serviceCredentials.get({type: 'webhook', id: 'service-credential-1'});
console.log(credential.fields.status);
