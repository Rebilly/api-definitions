<?php
$service =  new \Rebilly\Sdk\ReportsService($client);

$dashboard = $service->reports()->getDashboardMetrics(
    new DateTimeImmutable('2022-01-01'),
    new DateTimeImmutable('now'),
    metrics: 'approvalRate,salesCount,salesValue,refundsValue',
);
