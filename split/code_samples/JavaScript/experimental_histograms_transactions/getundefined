const params = {
    periodStart: '2017-09-21T00:00:00Z',
    // seven day period
    periodEnd: '2017-09-28T23:59:59Z',
    aggregationField: 'website',
    aggregationPeriod: 'day',
    metric: 'approval'
};
const report = await api.histograms.getTransactionHistogramReport(params);
console.log(report.fields.data);