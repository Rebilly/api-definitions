$service = new Rebilly\Sdk\ReportsService($client);

$service->reports()->getMonthlyRecurringRevenue(
    'USD',
    '2022-01',
    '2022-03',
    limit: 5,
);