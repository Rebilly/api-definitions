const params = {
    aggregationField: 'day',
    periodStart: '2017-09-21T00:00:00Z',
    periodEnd: '2017-09-28T23:59:59Z',
    limit: 20,
    offset: 0,
    filter: `gatewayAccounts:f9b4fa10-df1d-48a3-85b3-ff6bd7ce0ed2; \
            transactionResult:approved,canceled,declined,unknown`,
    tz: 0
};
const report = await api.reports.getDccMarkup(params);