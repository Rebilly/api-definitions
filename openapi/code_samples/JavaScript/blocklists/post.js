// first set the required properties for the new blocklist item
const data = {
    type: 'ip-address',
    value: '63.118.98.100'

    // optionally provide an `expirationTime` to make
    // the item expire and function like a `greylist`

    // expirationTime: '2017-09-18T21:50:44Z'
};

// the ID is optional
const firstKey = await api.blocklists.create({data});

// or you can provide one
const secondKey = await api.blocklists.create({id: 'my-second-id', data});
