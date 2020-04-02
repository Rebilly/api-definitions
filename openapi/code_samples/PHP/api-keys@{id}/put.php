$apiKeyForm = new Rebilly\Entities\ApiKey();
$apiKeyForm->setDescription('TestPut');
$apiKeyForm->setDatetimeFormat($apiKeyForm::DATETIME_FORMAT_MYSQL);

try {
    $apiKey = $client->apiKeys()->update('apiKeyID', $apiKeyForm);
} catch (UnprocessableEntityException $e) {
    echo $e->getMessage();
}
