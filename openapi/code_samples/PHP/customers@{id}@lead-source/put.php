$leadSourceForm = new Rebilly\Entities\LeadSource();
$leadSourceForm->setSource('TestSource');
$leadSourceForm->setCampaign('TestCampaign');

try {
    $customer = $client->customers()->updateLeadSource('myCustomerId', $leadSourceForm);
} catch (UnprocessableEntityException $e) {
    echo $e->getMessage();
}
