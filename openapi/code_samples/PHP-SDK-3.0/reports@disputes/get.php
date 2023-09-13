$service = new \Rebilly\Sdk\ReportsService($client);

$report = $service->reports()->getDisputes(
    'website',
    '2022-01',
    limit: 5,
);
