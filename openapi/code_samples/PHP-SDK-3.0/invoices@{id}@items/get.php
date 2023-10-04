<?php

$service = new \Rebilly\Sdk\CoreService($client);
$invoiceItems = $service->invoices()->getAllInvoiceItems('invoiceId');
