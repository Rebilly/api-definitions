$customerCredentialForm = new Rebilly\Entities\CustomerCredential();
$customerCredentialForm->setCustomerId('customerId');
$customerCredentialForm->setUsername('test');
$customerCredentialForm->setPassword('1234');

try {
    $customerCredential = $client->customerCredentials()->create($customerCredentialForm);
} catch (Rebilly\Http\Exception\DataValidationException $e) {
    echo $e->getMessage();
}
