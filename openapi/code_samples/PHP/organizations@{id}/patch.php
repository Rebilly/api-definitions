$organizationForm = new Rebilly\Entities\Organization();
$organizationForm->setName('Test Organization');
$organizationForm->setCountry('US');

try {
    $organization = $client->organizations()->update('organizationId', $organizationForm);
} catch (Rebilly\Http\Exception\DataValidationException $e) {
    echo $e->getMessage();
}
