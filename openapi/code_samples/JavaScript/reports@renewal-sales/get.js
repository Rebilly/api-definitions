const params = {
    periodStart: '2017-09',
    periodEnd: '2017-09',
    limit: 20,
    offset: 0,
    tz: 0
};
const report = await api.reports.getRenewalSales(params);