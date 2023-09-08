$service = new Rebilly\Sdk\UsersService($client);

$organizationForm = new Rebilly\Sdk\Model\PatchOrganizationRequest();
$organizationForm->setName('Test Organization');
$organizationForm->setCountry('US');

$organization = $service->organizations()->update('organizationId', $organizationForm);
