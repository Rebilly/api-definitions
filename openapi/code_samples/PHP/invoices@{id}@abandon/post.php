<?php

$service = new \Rebilly\Sdk\Service($client);
$invoice = $service->invoices()->abandon('invoiceId');
