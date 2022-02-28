$applicationInstance = new Rebilly\Entities\ApplicationInstance();
$applicationInstance->setSettings(['color' => 'red', 'limit' => 5]);

try {
    $applicationInstance = $client->applicationInstances()->update('applicationId', $applicationInstance);
} catch (Rebilly\Http\Exception\DataValidationException $e) {
    echo $e->getMessage();
}
