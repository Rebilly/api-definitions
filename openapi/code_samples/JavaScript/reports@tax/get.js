const params = {
    periodStart: '2023-01-01 00:00-00',
    periodEnd: '2023-03-31 23:59:59',
    accountingMethod: 'cash',
    limit: 20,
    offset: 0,
};
const report = await api.reports.getTax(params);
