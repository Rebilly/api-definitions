const params = {
    periodStart: '2017-09-21T00:00:00Z',
    periodEnd: '2017-09-28T23:59:59Z',
    limit: 20,
    offset: 0
};
const report = await api.reports.getPaymentsSuccessByDeclineReason(params);