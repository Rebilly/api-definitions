<?php

$service = new \Rebilly\Sdk\Service($client);

$report = $service->reports()->getDisputes(
    'website',
    '2022-01',
    limit: 5,
);
