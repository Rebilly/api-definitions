// first set the required properties for the new service credential
const data = {
    host: 'foobar.test.com',
    auth: {
        type: 'none'
    }
};

const credential = await api.serviceCredentials.create({type: 'webhook', data});
// use the ID to authenticate your webhook in Rebilly
console.log(credential.fields.id);
