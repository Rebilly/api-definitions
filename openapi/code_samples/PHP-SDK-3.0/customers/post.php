$service = new Rebilly\Sdk\CoreService($client);

$customerForm = Rebilly\Sdk\Model\Customer::from([])
    ->setWebsiteId('websiteId')
    ->setPrimaryAddress(
        Rebilly\Sdk\Model\ContactObject::from([])
            ->setFirstName('John')
            ->setLastName('Doe')
            ->setAddress('Test street 5')
            ->setEmails([
                Rebilly\Sdk\Model\ContactEmails::from([])
                    ->setLabel('main')
                    ->setValue('johndoe@email.com')
                    ->setPrimary(true),
            ]),
    );

try {
    $customer = $service->customers()->create($customerForm);
} catch (Rebilly\Sdk\Exception\DataValidationException $e) {
    print_r($e->getValidationErrors());
}
