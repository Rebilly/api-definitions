$paymentInstrumentForm = new Rebilly\Entities\CommonPaymentInstrument();
$paymentInstrumentForm->setCvv('123');
$paymentInstrumentForm->setExpYear(2025);
$paymentInstrumentForm->setExpMonth(12);
$paymentInstrumentForm->setBillingAddress([
    'firstName' => 'John',
]);

try {
    $paymentInstrument = $client->paymentInstruments()->update('paymentInstrumentId', $paymentInstrumentForm);
} catch (UnprocessableEntityException $e) {
    echo $e->getMessage();
}

// Alternatively you can specify a partial token
$paymentInstrumentForm = new Rebilly\Entities\CommonPaymentInstrument();
$paymentInstrumentForm->setToken('partial-token');
$paymentInstrumentForm->setBillingAddress([
    'firstName' => 'John',
]);

try {
    $paymentInstrument = $client->paymentInstruments()->update('paymentInstrumentId', $paymentInstrumentForm);
} catch (UnprocessableEntityException $e) {
    echo $e->getMessage();
}
