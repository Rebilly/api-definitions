$organizationForm = new Rebilly\Entities\Organization();
$organizationForm->setName('Test Organization');
$organizationForm->setCountry('US');

try {
    $organization = $client->organizations()->create($organizationForm);
} catch (Rebilly\Http\Exception\DataValidationException $e) {
    print_r($e->getValidationErrors());
}
