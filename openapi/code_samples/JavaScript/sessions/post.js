// first set the properties for the new session
const data = {
    permissions: [
        {
            resourceName: 'plans',
            methods: [
                'GET',
                'POST',
                'PUT',
                'HEAD',
                'DELETE'
            ]
        }
    ]

    // optionally you can define an `expiredTime` to 
    // limit the duration of the session

    //expiredTime: '2017-09-18T19:17:39Z'
};

// the ID is optional
const firstSession = await api.sessions.create({data});

// or you can provide one
const secondSession = await api.sessions.create({id: 'my-second-key', data});