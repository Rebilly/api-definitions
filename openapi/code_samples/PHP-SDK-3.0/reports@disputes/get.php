$service = new Rebilly\Sdk\ReportsService($client);

$service->reports()->getDisputes(
    'website',
    '2022-01',
    limit: 5,
);