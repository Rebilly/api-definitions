<?php

$service = new \Rebilly\Sdk\Service($client);
$service->paymentInstruments()->deactivate('paymentInstrumentId');
