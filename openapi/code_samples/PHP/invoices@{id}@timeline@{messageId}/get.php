<?php

$service = new \Rebilly\Sdk\Service($client);
$timelineMessage = $service->invoices()->getTimelineMessage('invoiceId', 'messageId');
