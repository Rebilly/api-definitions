$organizationForm = new Rebilly\Entities\Organization();
$organizationForm->setName('Test Organization');
$organizationForm->setCountry('US');

try {
    $organization = $client->organizations()->update('organizationId', $organizationForm);
} catch (UnprocessableEntityException $e) {
    echo $e->getMessage();
}
