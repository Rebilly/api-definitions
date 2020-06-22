// first build the email data including
// the credential hash
const data = {
    bodyText: 'hello world',
    bodyHTML: `<strong>hello world</strong>`,
    sender: 'john.doe+test@grr.la',
    recipients: ['john.doe+test@grr.la'],
    subject: 'testing email preview',
    // created prior to the test
    credentialHash: 'dcf6e32f2daee457a1db8ce5fdfbe200'
};

const email = await api.previews.sendEmailRuleAction({data});