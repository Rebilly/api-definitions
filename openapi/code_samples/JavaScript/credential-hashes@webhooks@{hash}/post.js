// first set the required properties for the new credential hash
const data = {
    host: 'foobar.test.com',
    auth: {
        type: 'none'
    }
};

const credential = await api.credentialHashes.createWebhookCredential({data});
// use the hash to authenticate your webhook in Rebilly
console.log(credential.fields.hash);