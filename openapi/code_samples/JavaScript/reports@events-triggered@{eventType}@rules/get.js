const params = {
    periodStart: '2017-09-22T00:00:00Z',
    periodEnd: '2017-09-29T23:59:59Z',
    limit: 20,
    offset: 0,
    tz: 0
};
const report = await api.reports.getRulesMatchedSummary(params);