<?php

$service = new \Rebilly\Sdk\Service($client);
$service->invoices()->deleteTimelineMessage('invoiceId', 'messageId');
