// define values to update
const data = {
    description: 'A better description'
};

const apiKey = await api.apiKeys.update({id: 'my-second-key', data});