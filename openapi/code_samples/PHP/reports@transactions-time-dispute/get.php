<?php

$service = new \Rebilly\Sdk\ReportsService($client);

$report = $service->reports()->getTransactionsTimeDispute(
    'rebillNumber',
    new \DateTimeImmutable('2022-01-01'),
    new \DateTimeImmutable('now'),
    limit: 5,
);
