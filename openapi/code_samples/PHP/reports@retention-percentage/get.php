<?php

$service = new \Rebilly\Sdk\Service($client);

$report = $service->reports()->getRetentionPercentage(
    'day',
    'month',
    new \DateTimeImmutable('2022-01-01'),
    new \DateTimeImmutable('now'),
    limit: 5,
);
