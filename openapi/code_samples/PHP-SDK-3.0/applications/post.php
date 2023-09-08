$service = new Rebilly\Sdk\UsersService($client);
$application = new Rebilly\Sdk\Model\Application();
$application->setName('My application');
$application->setDescription('My application description');
$application->setLogoId('fileId');
$application->setPermissions(['GetTransactionCollection']);

try {
    $application = $service->applications()->create($application);
} catch (Rebilly\Sdk\Exception\DataValidationException $e) {
    print_r($e->getValidationErrors());
}
