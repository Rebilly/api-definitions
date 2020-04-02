$customerCredentialForm = new Rebilly\Entities\CustomerCredential();
$customerCredentialForm->setCustomerId('customerId');
$customerCredentialForm->setUsername('test');
$customerCredentialForm->setPassword('1234');

try {
    $customerCredential = $client->customerCredentials()->update('credentialId', $customerCredentialForm);
} catch (UnprocessableEntityException $e) {
    echo $e->getMessage();
}
