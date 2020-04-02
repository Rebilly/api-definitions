$apiKeyForm = new Rebilly\Entities\ApiKey();
$apiKeyForm->setDescription('Test');
$apiKeyForm->setDatetimeFormat($apiKeyForm::DATETIME_FORMAT_MYSQL);

try {
    $apiKey = $client->apiKeys()->create($apiKeyForm);
} catch (UnprocessableEntityException $e) {
    echo $e->getMessage();
}
