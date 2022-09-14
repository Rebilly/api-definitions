$service = new Rebilly\Sdk\ReportsService($client);

$service->reports()->getCumulativeSubscriptions(
    'day',
    new DateTimeImmutable('2022-01-01'),
    new DateTimeImmutable('now'),
    limit: 5,
);
