<?php
$service =  new \Rebilly\Sdk\CoreService($client);
$transactionAllocations = $service->invoices()->getAllTransactionAllocations('invoiceId');
