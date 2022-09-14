$service = new Rebilly\Sdk\ReportsService($client);

$service->reports()->getRevenueWaterfall(
    'USD',
    '2022-01',
    '2022-02',
    '2022-02',
);
