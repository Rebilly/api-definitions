<?php

$service = new \Rebilly\Sdk\Service($client);
$service->invoices()->deleteInvoiceItem('invoiceId', 'invoiceItemId');
