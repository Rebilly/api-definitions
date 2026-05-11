<?php

$service = new \Rebilly\Sdk\Service($client);

$report = $service->reports()->getRetentionValue(
    'month',
    'day',
    periodStart: new \DateTimeImmutable('2022-01-01'),
    periodEnd: new \DateTimeImmutable('now'),
    limit: 5,
);
