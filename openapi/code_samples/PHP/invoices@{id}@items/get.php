<?php

$service = new \Rebilly\Sdk\Service($client);
$invoiceItems = $service->invoices()->getAllInvoiceItems('invoiceId');
