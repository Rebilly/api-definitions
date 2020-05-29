// first set the required properties for the new credential hash
const data = {
    apiKey: 'SO.WFbRlSWUQJSb40eny4RuZQ.7liHLZ4l1jaPCgbu02b-aGH-bo4RB8z9fK3aUd1heeL',
};

const credential = await api.credentialHashes.createSendGridCredential({data});
// use the hash to authenticate your email action in the rules engine
console.log(credential.fields.hash);