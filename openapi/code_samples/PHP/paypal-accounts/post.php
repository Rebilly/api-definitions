$payPalForm = new Rebilly\Entities\PayPalAccount();
$payPalForm->setCustomerId('customerId');
$payPalForm->setBillingAddress([
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
    $payPalAccount = $client->payPalAccounts()->create($payPalForm);
} catch (UnprocessableEntityException $e) {
    echo $e->getMessage();
}
