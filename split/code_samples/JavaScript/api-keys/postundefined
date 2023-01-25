// first set the properties for the new API key
const data = {
    description: 'My new API key',
    type: 'secret'
};

// the ID is optional
const firstKey = await api.apiKeys.create({data});

// or you can provide one
const secondKey = await api.apiKeys.create({id: 'my-second-key', data});