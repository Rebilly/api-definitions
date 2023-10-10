$leadSourceForm = new Rebilly\Entities\LeadSource();
$leadSourceForm->setSource('TestSource');
$leadSourceForm->setCampaign('TestCampaign');

try {
    $customer = $client->customers()->updateLeadSource('myCustomerId', $leadSourceForm);
} catch (Rebilly\Http\Exception\DataValidationException $e) {
    print_r($e->getValidationErrors());
}
