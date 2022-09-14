$service = new Rebilly\Sdk\ReportsService($client);

$report = $service->reports()->getRetentionValue(
    'month',
    'day',
    new DateTimeImmutable('2022-01-01'),
    new DateTimeImmutable('now'),
    limit: 5,
);
