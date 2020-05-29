const details = await api.credentialHashes.getWebhookCredential({hash: 'foobar-001'});
console.log(details.fields.host);