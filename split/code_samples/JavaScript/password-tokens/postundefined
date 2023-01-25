// first set the required properties for the new credential
const data = {
    username: 'foobar',
    password: 'fuubar',
    // the `credential` expects 
    // the customer credential's ID
    credential: 'foobar-0001'

    // optionally you can define an `expiredTime` to 
    // limit the duration of the reset token

    //expiredTime: '2017-09-18T19:17:39Z'
};

const resetToken = await api.customerAuthentication.createResetPasswordToken({data});