$paymentCardForm = new Rebilly\Entities\PaymentCard();
$paymentCardForm->setCustomerId('customerId');
$paymentCardForm->setPan('4111111111111111');
$paymentCardForm->setExpYear(2025);
$paymentCardForm->setExpMonth(8);
$paymentCardForm->setBillingAddress([
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

try {
    $paymentCard = $client->paymentCards()->create($paymentCardForm);
} catch (UnprocessableEntityException $e) {
    echo $e->getMessage();
}
