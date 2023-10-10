$apiKeyForm = new Rebilly\Entities\ApiKey();
$apiKeyForm->setDescription('Test key');

try {
    $apiKey = $client->apiKeys()->create($apiKeyForm);
} catch (Rebilly\Http\Exception\DataValidationException $e) {
    print_r($e->getValidationErrors());
}
