// type and id are required, other parameters are optional
const firstCollection = await api.serviceCredentials.getItems({type: 'oauth2', id: 'service-credential-1'});

// alternatively you can specify one or more of them
const params = {type: 'oauth2', id: 'service-credential-1', limit: 20, offset: 100};
const secondCollection = await api.serviceCredentials.getItems(params);
