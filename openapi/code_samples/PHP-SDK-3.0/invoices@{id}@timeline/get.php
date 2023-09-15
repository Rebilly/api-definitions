<?php
$service =  new \Rebilly\Sdk\CoreService($client);
$timelineMessages = $service->invoices()->getAllTimelineMessages('invoiceId', filter: 'triggeredBy:direct-api');
