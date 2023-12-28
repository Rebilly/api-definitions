<?php

$service = new \Rebilly\Sdk\ReportsService($client);

$report = $service->reports()->getTransactions(
    new \DateTimeImmutable('2022-01-01'),
    new \DateTimeImmutable('now'),
    'leadSource.subAffiliate',
    limit: 5,
);
