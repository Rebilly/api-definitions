$apiKeyForm = new Rebilly\Entities\ApiKey();
$apiKeyForm->setDescription('Test');
$apiKeyForm->setDatetimeFormat($apiKeyForm::DATETIME_FORMAT_MYSQL);

try {
    $apiKey = $client->apiKeys()->create($apiKeyForm);
} catch (Rebilly\Http\Exception\DataValidationException $e) {
    echo $e->getMessage();
}
