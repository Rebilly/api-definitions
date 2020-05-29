const details = await api.credentialHashes.getMailgunCredential({hash: 'foobar-001'});
console.log(details.fields.domain);