$service = new \Rebilly\Sdk\UsersService($client);
$applicationInstance = \Rebilly\Sdk\Model\ApplicationInstance::from([
    'settings' => ['color' => 'red', 'limit' => 5],
]);

try {
    $applicationInstance = $service->applicationInstances()->upsert('applicationId', $applicationInstance);
} catch (\Rebilly\Sdk\Exception\DataValidationException $e) {
    print_r($e->getValidationErrors());
}
