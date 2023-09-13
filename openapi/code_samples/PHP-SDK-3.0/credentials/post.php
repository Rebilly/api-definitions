$service = new \Rebilly\Sdk\CoreService($client);

$customerCredentialForm = \Rebilly\Sdk\Model\CustomerCredential::from([])
    ->setCustomerId('customerId')
    ->setUsername('test')
    ->setPassword('1234');

try {
    $customerCredential = $service->customerAuthentication()->createCredential($customerCredentialForm);
} catch (\Rebilly\Sdk\Exception\DataValidationException $e) {
    print_r($e->getValidationErrors());
}
