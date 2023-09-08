$service = new Rebilly\Sdk\UsersService($client);
$applicationInstance = Rebilly\Sdk\Model\ApplicationInstance::from([
    'settings' => ['color' => 'red', 'limit' => 5],
]);

$applicationInstance = $service->applicationInstances()->upsert('applicationId', $applicationInstance);
