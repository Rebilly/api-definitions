const details = await api.credentialHashes.getSendGridCredential({hash: 'foobar-001'});
console.log(details.fields.apiKey);