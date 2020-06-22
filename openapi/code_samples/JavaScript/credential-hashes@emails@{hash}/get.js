const details = await api.credentialHashes.getEmailCredential({hash: 'foobar-001'});
console.log(details.fields.host);