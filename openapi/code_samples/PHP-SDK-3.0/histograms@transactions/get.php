$service = new \Rebilly\Sdk\ReportsService($client);

$histogram = $service->histograms()->getTransactionHistogramReport(
    new DateTimeImmutable('2022-01-01'),
    new DateTimeImmutable('now'),
    'website',
    'day',
    'sales',
);
