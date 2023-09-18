<?php

$service = new \Rebilly\Sdk\CoreService($client);
$invoice = $service->invoices()->void('invoiceId');
