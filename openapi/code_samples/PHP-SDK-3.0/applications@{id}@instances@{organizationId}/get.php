$service = new Rebilly\Sdk\UsersService($client);
$applicationInstance = $service->applications()->getInstance('applicationId', 'organizationId');
