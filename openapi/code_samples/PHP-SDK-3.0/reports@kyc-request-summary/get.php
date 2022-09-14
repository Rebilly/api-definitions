$service = new Rebilly\Sdk\ReportsService($client);

$service->reports()->getKycRequestSummary(
    new DateTimeImmutable('2022-01-01'),
    new DateTimeImmutable('now'),
);