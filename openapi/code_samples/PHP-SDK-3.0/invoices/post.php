$service = new Rebilly\Sdk\CoreService($client);

$invoice = Rebilly\Sdk\Model\Invoice::from()
    ->setCustomerId('customerId')
    ->setWebsiteId('websiteId')
    ->setCurrency('USD')
    ->setBillingAddress([
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
    $invoice = $service->invoices()->create($invoice);
} catch (Rebilly\Sdk\Exception\DataValidationException $e) {
    print_r($e->getValidationErrors());
}
