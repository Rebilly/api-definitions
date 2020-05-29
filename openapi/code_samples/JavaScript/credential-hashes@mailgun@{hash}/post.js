// first set the required properties for the new credential hash
const data = {
    emailFrom: 'me@mydomain.com', // sender email
    apiKey: 'key-1234567890', // use your Mailgun API key
    domain: 'mail.mydomain.com' // Mailgun domain
};

const credential = await api.credentialHashes.createMailgunCredential({data});
// use the hash to authenticate your email action in the rules engine
console.log(credential.fields.hash);