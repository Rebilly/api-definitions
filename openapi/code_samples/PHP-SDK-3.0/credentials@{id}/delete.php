$service = new \Rebilly\Sdk\CoreService($client);

$client->customerAuthentication()->deleteCredential('credentialId');
