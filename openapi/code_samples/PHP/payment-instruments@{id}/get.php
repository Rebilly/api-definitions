<?php

$service = new \Rebilly\Sdk\Service($client);
$paymentInstrument = $service->paymentInstruments()->get('paymentInstrumentId');
