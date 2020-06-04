const data = {
    username: 'foobar',
    password: 'fuubar'

    // optionally you can define an `expiredTime` to 
    // limit the duration of the session token

    //expiredTime: '2017-09-18T19:17:39Z'
};
const session = await api.customerAuthentication.login({data});
console.log(session.fields.token);