$service = new \Rebilly\Sdk\UsersService($client);

$apiKeyForm = new \Rebilly\Sdk\Model\ApiKey();
$apiKeyForm->setDescription('Test key');

try {
    $apiKey = $service->apiKeys()->update('apiKeyID', $apiKeyForm);
} catch (\Rebilly\Sdk\Exception\DataValidationException $e) {
    print_r($e->getValidationErrors());
}
