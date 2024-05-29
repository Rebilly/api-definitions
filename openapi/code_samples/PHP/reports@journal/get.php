<?php

$service = new \Rebilly\Sdk\Service($client);

$report = $service->reports()->getJournal(
    'USD',
    '2022-04',
    'product.id',
    limit: 5,
);
