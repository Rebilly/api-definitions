$service = new \Rebilly\Sdk\UsersService($client);
$service->apiKeys()->delete('apiKeyID');
