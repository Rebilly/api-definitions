$transactionForm = new Rebilly\Entities\Transaction();
$transactionForm->setType('sale');
$transactionForm->setCustomerId('customerId');
$transactionForm->setWebsiteId('websiteId');
$transactionForm->setCurrency('USD');
$transactionForm->setAmount(1);

$paymentInstruction = new Rebilly\Entities\Transactions\PaymentInstructions\PaymentTokenInstruction();
$paymentInstruction->setToken('payment-token');
$transactionForm->setPaymentInstruction($paymentInstruction);

$transactionForm->setBillingAddress([
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
    'dob' => '2000-06-01',
]);

try {
    $transaction = $client->transactions()->create($transactionForm);
} catch (Rebilly\Http\Exception\DataValidationException $e) {
    print_r($e->getValidationErrors());
}
