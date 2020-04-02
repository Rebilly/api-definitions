$paymentCardTokenForm = new Rebilly\Entities\PaymentCardToken();
$paymentCardTokenForm->setBillingAddress([
    'firstName' => 'John',
    'lastName' => 'Doe',
    'organization' => 'Test LTD',
    'address' => 'Test street 5',
    'address2' => 'Test house 5',
    'city' => 'New York',
    'region' => 'Long Island',
    'country' => 'US',
    'postalCode' => '123456',
    'emails' => [
        [
            'label' => 'main',
            'value' => 'johndoe@testemail.com',
            'primary' => true,
        ],
        [
            'label' => 'secondary',
            'value' => 'otheremail@testemail.com',
        ],
    ],
    'phoneNumbers' => [
        [
            'label' => 'work',
            'value' => '+123456789',
            'primary' => true,
        ],
        [
            'label' => 'home',
            'value' => '+9874654321',
        ],
    ],
]);

$paymentInstrumentForm = new Entities\PaymentInstruments\PaymentCardPaymentInstrument();
$paymentInstrumentForm->setPan('4111111111111111');
$paymentInstrumentForm->setExpYear(2025);
$paymentInstrumentForm->setExpMonth(8);
$paymentInstrumentForm->setCvv(123);

$paymentCardTokenForm->setPaymentInstrument($paymentInstrumentForm);

try {
    $paymentCardToken = $client->paymentCardTokens()->create($paymentCardTokenForm);
} catch (UnprocessableEntityException $e) {
    echo $e->getMessage();
}
