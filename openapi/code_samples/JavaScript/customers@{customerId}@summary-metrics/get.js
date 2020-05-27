const metrics = await api.customers.getCustomerLifetimeSummaryMetrics({id: 'foobar-0001'});
console.log(metrics.fields.revenueAmount);