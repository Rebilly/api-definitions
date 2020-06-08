// first set the required properties for the new credential hash
const data = {
    key: 'BWITYO4UARGDLMFY6UDP',
    secret: '8D34yYHOK9+yM7pDnNUO3UTO/5b8Wy/PGNyzTRmG',
    region: 'us-west-2',
    configurationSetName: 'SpecialConfigurationSet',
};

const credential = await api.credentialHashes.createAWSSESCredential({data});
// use the hash to authenticate your email action in the rules engine
console.log(credential.fields.hash);