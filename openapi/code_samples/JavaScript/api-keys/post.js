// first set the properties for the new API key
const data = {
    description: 'My new API key',
    // the `datetimeFormat` defines how dates will be saved 
    // and handled by Rebilly for this API key
    // can be either `iso8601` (default) or `mysql`
    datetimeFormat: 'iso8601'
};

// the ID is optional
const firstKey = await api.apiKeys.create({data});

// or you can provide one
const secondKey = await api.apiKeys.create({id: 'my-second-key', data});