// first build the webhook data including
// the credential hash
const data = {
    eventsFilter: [],
    status: 'active',
    method: 'POST',
    headers: {},
    // hookb.in is a great tool for
    // previewing webhooks
    url: 'https://hookb.in/Oe90ZRmdeWUGWg1MGKQV',
    // created prior to the test
    credentialHash: 'dcf6e32f2daee457a1db8ce5fdfbe200'
};

const request = await api.previews.webhooks({data});
// the request does not return any fields but
// you can confirm the success using the status code
console.log(request.response.status); // 204