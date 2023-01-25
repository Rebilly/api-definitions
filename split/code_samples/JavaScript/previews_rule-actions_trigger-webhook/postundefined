// first build the webhook data including
// the credential hash
const data = {
    body: JSON.stringify({hello: 'world'}),
    status: 'active',
    method: 'POST',
    headers: {},
    query: {},
    // hookb.in is a great tool for
    // previewing webhooks
    url: 'https://hookb.in/Oe90ZRmdeWUGWg1MGKQV',
    // created prior to the test
    credentialHash: 'dcf6e32f2daee457a1db8ce5fdfbe200'
};

const webhook = await api.previews.triggerWebhookRuleAction({data});