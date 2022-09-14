$service = new Rebilly\Sdk\ReportsService($client);

$service->reports()->getFutureRenewals(
    '2022-10',
    '2022-11',
    limit: 5,
);