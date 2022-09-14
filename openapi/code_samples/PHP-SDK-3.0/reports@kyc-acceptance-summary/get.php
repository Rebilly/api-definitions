$service = new Rebilly\Sdk\ReportsService($client);

$service->reports()->getKycAcceptanceSummary(
    new DateTimeImmutable('2022-01-01'),
    new DateTimeImmutable('now'),
);
