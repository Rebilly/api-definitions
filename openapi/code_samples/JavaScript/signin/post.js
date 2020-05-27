const data = {
    email: 'acme+test@rebilly.com',
    password: 'helloworld123'

    // optionally you can define an `expiredTime` to 
    // limit the duration of the session token

    //expiredTime: '2017-09-18T19:17:39Z'
};

const session = await api.account.signIn({data});

// the session token (JWT) can be used in
// conjunction with api.setSessionToken to authorize API
// requests in the browser 
console.log(session.fields.token);