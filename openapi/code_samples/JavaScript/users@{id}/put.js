// creating a new user
const data = {
    email: 'john.doe+test@grr.la',
    firstName: 'John',
    lastName: 'Doe',
    businessPhone: '151412345676',
    mobilePhone: '151412345676',
    permissions: [],
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
    country: 'CA',
};

const user = await api.users.update({id: 'my-second-key', data});
