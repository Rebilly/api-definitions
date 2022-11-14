const report = await api.reports.getMonthlyRecurringRevenue({
    periodStart: '2016-09',
    periodEnd: '2017-09',
    limit: 20,
    offset: 0,
    tz: 0
});