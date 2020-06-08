const data = {
    status: "active",
    serverApiToken: "your-postmark-token"
}

const credential = await api.credentialHashes.createPostmarkCredential({data});
// use the hash to authenticate your email action in the rules engine
console.log(credential.fields.hash);