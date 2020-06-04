// creating a new credential
const data = {
    username: 'foobar',
    password: 'fuubar',
    customerId: 'foobar-0001'

    // optionally you can define an `expiredTime` to 
    // limit the duration of the credential

    //expiredTime: '2017-09-18T19:17:39Z'
};

// the ID is optional
const firstCredential = await api.customerAuthentication.createCredential({data});

// or you can provide one
const secondCredential = await api.customerAuthentication.createCredential({id: 'my-second-id', data});




// updating a credential
const data = {
    username: 'foobar',
    password: 'hell0'
};

const secondCredential = await api.customerAuthentication.updateCredential({id: 'my-second-id', data});