<?php

$service = new \Rebilly\Sdk\Service($client);
$invoiceItem = $service->invoices()->getInvoiceItem('invoiceId', 'invoiceItemId');
