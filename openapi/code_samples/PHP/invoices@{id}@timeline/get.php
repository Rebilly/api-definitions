<?php

$service = new \Rebilly\Sdk\Service($client);
$timelineMessages = $service->invoices()->getAllTimelineMessages('invoiceId', filter: 'triggeredBy:direct-api');
