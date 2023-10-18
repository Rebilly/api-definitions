<?php

$service = new \Rebilly\Sdk\UsersService($client);

$paymentInstrumentForm = new \Rebilly\Sdk\Model\PaymentCardUpdatePlain();
$paymentInstrumentForm->setCvv('123');
$paymentInstrumentForm->setExpYear(2025);
$paymentInstrumentForm->setExpMonth(12);
$paymentInstrumentForm->setBillingAddress([
    'firstName' => 'John',
]);

try {
    $paymentInstrument = $service->paymentInstruments()->update('paymentInstrumentId', $paymentInstrumentForm);
} catch (\Rebilly\Sdk\Exception\DataValidationException $e) {
    print_r($e->getValidationErrors());
}

// Alternatively you can specify a partial token
$paymentInstrumentForm = new \Rebilly\Sdk\Model\PaymentInstrumentUpdateToken();
$paymentInstrumentForm->setToken('partial-token');
$paymentInstrumentForm->setBillingAddress([
    'firstName' => 'John',
]);

try {
    $paymentInstrument = $service->paymentInstruments()->update('paymentInstrumentId', $paymentInstrumentForm);
} catch (\Rebilly\Sdk\Exception\DataValidationException $e) {
    print_r($e->getValidationErrors());
}
