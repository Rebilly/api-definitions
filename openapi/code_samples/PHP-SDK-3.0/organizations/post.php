$service = new Rebilly\Sdk\UsersService($client);
$organizationForm = new Rebilly\Sdk\Model\PostOrganizationRequest();
$organizationForm->setName('Test Organization');
$organizationForm->setCountry('US');

$organization = $service->organizations()->create($organizationForm);
