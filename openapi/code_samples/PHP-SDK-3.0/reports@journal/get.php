<?php
$service =  new \Rebilly\Sdk\ReportsService($client);

$report = $service->reports()->getJournal(
    'USD',
    '2022-04',
    'product.id',
    limit: 5,
);
