<?php

$service = new \Rebilly\Sdk\CoreService($client);
$service->invoices()->deleteTimelineMessage('invoiceId', 'messageId');
