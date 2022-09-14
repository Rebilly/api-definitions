$service = new Rebilly\Sdk\ReportsService($client);

$service->reports()->getJournal(
    'USD',
    '2022-04',
    'product.id',
    limit: 5,
);