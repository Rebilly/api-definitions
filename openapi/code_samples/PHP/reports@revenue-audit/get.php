<?php

$service = new \Rebilly\Sdk\Service($client);

$report = $service->reports()->getRevenueAudit(limit: 5);
