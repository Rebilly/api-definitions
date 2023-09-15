<?php
$service =  new \Rebilly\Sdk\ReportsService($client);

$metrics = $service->customers()->getCustomerLifetimeSummaryMetrics('customerId');
