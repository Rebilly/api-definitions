const report = await api.reports.getAnnualRecurringRevenue({
    periodStart: '2016-09',
    periodEnd: '2018-09',
    currency: 'USD',
});
