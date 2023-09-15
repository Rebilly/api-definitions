<?php

$service = new \Rebilly\Sdk\CoreService($client);
$invoiceItem = $service->invoices()->getInvoiceItem('invoiceId', 'invoiceItemId');
