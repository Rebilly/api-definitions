$service = new \Rebilly\Sdk\CoreService($client);

$customerCredential = $service->customerAuthentication()->getCredential('credentialId');
