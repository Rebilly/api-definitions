<?php

$service = new \Rebilly\Sdk\ReportsService($client);

$report = $service->reports()->getDccMarkup(
    'day',
    new DateTimeImmutable('2022-01-01'),
    new DateTimeImmutable('now'),
    limit: 5,
);
