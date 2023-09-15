<?php
$service =  new \Rebilly\Sdk\ReportsService($client);

$report = $service->reports()->getKycRejectionSummary(
    new DateTimeImmutable('2022-01-01'),
    new DateTimeImmutable('now'),
);
