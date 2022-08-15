$service = new Rebilly\Sdk\Service($client);

$customerCredentialForm =Rebilly\Sdk\Model\CustomerCredential::from([]);
$customerCredentialForm->setCustomerId('customerId');
$customerCredentialForm->setUsername('test');
$customerCredentialForm->setPassword('1234');

try {
    $customerCredential = $service->customerAuthentication()->updateCredential('credentialId', $customerCredentialForm);
} catch (Rebilly\Sdk\Exception\DataValidationException $e) {
    print_r($e->getValidationErrors());
}
