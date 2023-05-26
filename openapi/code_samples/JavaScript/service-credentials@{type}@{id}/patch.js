// first set the status to update for the service credential
const data = {
    status: 'deactivated'
};

const credential = await api.serviceCredentials.update({type: 'webhook', id: 'service-credential-1', data});
