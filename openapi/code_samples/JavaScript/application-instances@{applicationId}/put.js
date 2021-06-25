// define values to upsert
const data = {
  settings: {
    color: 'red',
    limit: 5,
  },
};

const apiKey = await api.applicationInstances.upsert({applicationId: 'applicationId', data});
