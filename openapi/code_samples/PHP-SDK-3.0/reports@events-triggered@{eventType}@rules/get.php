$service = new Rebilly\Sdk\ReportsService($client);

$report = $service->reports()->getTriggeredEventRuleReport(
    Rebilly\Sdk\Model\EventType::ACCOUNT_PASSWORD_RESET_REQUESTED,
    new DateTimeImmutable('2022-01-01'),
    new DateTimeImmutable('now'),
    limit: 5,
);
