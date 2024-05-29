<?php

$service = new \Rebilly\Sdk\Service($client);

$report = $service->reports()->getSubscriptionCancellation(
    new \DateTimeImmutable('2022-01-01'),
    new \DateTimeImmutable('now'),
    'leadSource.source',
    limit: 5,
);
