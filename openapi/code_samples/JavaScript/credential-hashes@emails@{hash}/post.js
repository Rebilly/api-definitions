// first set the required properties for the new credential hash
const data = {
    host: 'foobar.test.com',
    port: 465,
    encryption: 'ssl',
    auth: {
        type: 'login',
        username: 'foobar',
        password: 'fuubar'
    }
};

const credential = await api.credentialHashes.createEmailCredential({data});
// use the hash to authenticate your email action in the system events
console.log(credential.fields.hash);