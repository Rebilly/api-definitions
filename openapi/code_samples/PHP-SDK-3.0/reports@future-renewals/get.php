<?php
$service =  new \Rebilly\Sdk\ReportsService($client);

$report = $service->reports()->getFutureRenewals(
    '2022-10',
    '2022-11',
    limit: 5,
);
