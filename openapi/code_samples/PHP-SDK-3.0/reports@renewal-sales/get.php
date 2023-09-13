$service = new \Rebilly\Sdk\ReportsService($client);

$report = $service->reports()->getRenewalSales(
    '2022-01',
    '2022-03',
    limit: 5,
);
