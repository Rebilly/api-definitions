$service = new \Rebilly\Sdk\CoreService($client);

$transactionForm = new \Rebilly\Sdk\Model\PostTransactionRequest([
    'type' => 'sale',
    'amount' => 1,
]);
$transactionForm->setCustomerId('customerId');
$transactionForm->setWebsiteId('websiteId');
$transactionForm->setCurrency('USD');

$paymentInstruction = new \Rebilly\Sdk\Model\PaymentInstructionInstrument();
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
    $transaction = $service->transactions()->create($transactionForm);
} catch (\Rebilly\Sdk\Exception\DataValidationException $e) {
    print_r($e->getValidationErrors());
}
