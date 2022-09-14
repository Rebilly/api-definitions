$service = new Rebilly\Sdk\ReportsService($client);

$service->reports()->getKycRejectionSummary(
    new DateTimeImmutable('2022-01-01'),
    new DateTimeImmutable('now'),
);
