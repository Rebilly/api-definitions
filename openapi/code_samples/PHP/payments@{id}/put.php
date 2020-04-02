$paymentForm = new Rebilly\Entities\Payment();

$paymentForm->setWebsiteId('websiteId');
$paymentForm->setCustomerId('customerId');
$paymentForm->setCurrency('USD');
$paymentForm->setAmount(1.99);

$data = [
    'method' => Rebilly\Entities\PaymentMethod::METHOD_CASH,
];

$paymentInstrumentForm = new Rebilly\Entities\PaymentMethodInstrument($data);

$paymentForm->setPaymentInstrument($paymentInstrumentForm);

try {
    $payment = $client->payments()->update('paymentId', $paymentForm);
} catch (UnprocessableEntityException $e) {
    echo $e->getMessage();
}
