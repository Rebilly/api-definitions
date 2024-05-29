<?php

$service = new \Rebilly\Sdk\Service($client);
$invoice = $service->invoices()->issue('invoiceId', new \Rebilly\Sdk\Model\InvoiceIssue([
    'issuedTime' => '2025-01-01 05:00:00',
]));
