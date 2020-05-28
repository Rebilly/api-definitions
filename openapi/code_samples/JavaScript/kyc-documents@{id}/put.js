// define the values to update
const data = {
    status: 'accepted'
};

const document = await api.kycDocuments.update({id: 'my-second-id', data});