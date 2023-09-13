$service = new \Rebilly\Sdk\ReportsService($client);

$report = $service->reports()->getSubscriptionCancellation(
    new DateTimeImmutable('2022-01-01'),
    new DateTimeImmutable('now'),
    'leadSource.source',
    limit: 5,
);
