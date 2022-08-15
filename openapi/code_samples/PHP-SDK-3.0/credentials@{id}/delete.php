$service = new Rebilly\Sdk\Service($client);

$client->customerAuthentication()->deleteCredential('credentialId');
