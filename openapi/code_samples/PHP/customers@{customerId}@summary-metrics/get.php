<?php

$service = new \Rebilly\Sdk\Service($client);

$metrics = $service->customers()->getCustomerLifetimeSummaryMetrics('customerId');
