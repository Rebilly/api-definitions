const details = await api.credentialHashes.getPostmarkCredential({hash: 'foobar-001'});
console.log(details.fields.domain);