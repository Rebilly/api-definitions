<?php

$service = new \Rebilly\Sdk\ReportsService($client);

$report = $service->reports()->getRevenueAudit(limit: 5);
