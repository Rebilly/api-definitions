$service = new Rebilly\Sdk\ReportsService($client);

$service->reports()->getRenewalSales(
    '2022-01',
    '2022-03',
    limit: 5,
);