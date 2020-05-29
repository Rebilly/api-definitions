// define the subscription details
const data = {
    planId: 'my-other-plan',
    renewalPolicy: 'retain',
    prorated: false
};

const abandonedInvoice = await api.subscriptions.changePlan({id: 'my-subscription-id', data});