// creating a new user
const data = {
    email: 'john.doe+test@grr.la',
    firstName: 'John',
    lastName: 'Doe',
    businessPhone: '151412345676',
    mobilePhone: '151412345676',
    password: 'genericPasswordValue',
    permissions: [],
    reportingCurrency: 'USD',
    // totp requires the use of a smart phone
    // with Google Authenticator installed
    totpRequired: false,
    totpSecret: '',
    totpUrl: '',
    country: 'US',
    preferences: {}
};

// the ID is optional
const firstProduct = await api.users.create({data});

// or you can provide one
const secondProduct = await api.users.create({id: 'my-second-key', data});



// updating a user
const data = {
    email: 'john.doe+test@grr.la',
    firstName: 'John',
    lastName: 'Doe',
    reportingCurrency: 'CAD',
    country: 'CA',
};

const user = await api.users.update({id: 'my-second-key', data});