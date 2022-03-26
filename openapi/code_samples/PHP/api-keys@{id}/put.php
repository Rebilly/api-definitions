$apiKeyForm = new Rebilly\Entities\ApiKey();
$apiKeyForm->setDescription('Test key');

try {
    $apiKey = $client->apiKeys()->update('apiKeyID', $apiKeyForm);
} catch (Rebilly\Http\Exception\DataValidationException $e) {
    echo $e->getMessage();
}
