$bankAccountForm = new Rebilly\Entities\BankAccount();
$bankAccountForm->setCustomerId('customerId');
$bankAccountForm->setRoutingNumber('0123456');
$bankAccountForm->setAccountNumber('0123456');
$bankAccountForm->setAccountType('checking');
$bankAccountForm->setBillingAddress([
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
    $bankAccount = $client->customers()->create($bankAccountForm, 'bankAccountId');
} catch (UnprocessableEntityException $e) {
    echo $e->getMessage();
}
