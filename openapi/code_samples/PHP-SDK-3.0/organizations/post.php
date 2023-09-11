$service = new Rebilly\Sdk\UsersService($client);
$organizationForm = new Rebilly\Sdk\Model\PostOrganizationRequest();
$organizationForm->setName('Test Organization');
$organizationForm->setCountry('US');

try {
    $organization = $service->organizations()->create($organizationForm);
} catch (Rebilly\Sdk\Exception\DataValidationException $e) {
    print_r($e->getValidationErrors());
}
