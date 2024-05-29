<?php

$service = new \Rebilly\Sdk\Service($client);
$transactionAllocations = $service->invoices()->getAllTransactionAllocations('invoiceId');
