<?php

$service = new \Rebilly\Sdk\Service($client);

$report = $service->reports()->getTimeSeriesTransaction(
    'approval-rate',
    'leads.sales-agent',
    new \DateTimeImmutable('2022-01-01'),
    new \DateTimeImmutable('now'),
);
