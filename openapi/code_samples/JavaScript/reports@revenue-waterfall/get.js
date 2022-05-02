const report = await api.reports.getRevenueWaterfall({
    issuedFrom: '2016-09',
    issuedTo: '2017-09',
    recognizedTo: '2017-09',
    limit: 20,
    offset: 0,
    tz: 0
});