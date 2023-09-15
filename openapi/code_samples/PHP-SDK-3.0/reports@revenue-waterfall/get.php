<?php
$service =  new \Rebilly\Sdk\ReportsService($client);

$report = $service->reports()->getRevenueWaterfall(
    'USD',
    '2022-01',
    '2022-02',
    '2022-02',
);
