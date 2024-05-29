<?php

$service = new \Rebilly\Sdk\Service($client);

$report = $service->reports()->getEventsTriggeredSummary(
    new \DateTimeImmutable('2022-01-01'),
    new \DateTimeImmutable('now'),
    limit: 5,
);
