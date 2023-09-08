$service = new Rebilly\Sdk\UsersService($client);

$apiKeyForm = new Rebilly\Sdk\Model\ApiKey();
$apiKeyForm->setDescription('Test key');

$apiKey = $service->apiKeys()->update('apiKeyID', $apiKeyForm);
