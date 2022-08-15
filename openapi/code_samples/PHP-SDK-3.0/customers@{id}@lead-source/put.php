$service = new Rebilly\Sdk\Service($client);

$leadSourceForm = Rebilly\Sdk\Model\LeadSource::from([]);
$leadSourceForm->setSource('TestSource');
$leadSourceForm->setCampaign('TestCampaign');

try {
    $customer = $service->customers()->createLeadSource('myCustomerId', $leadSourceForm);
} catch (Rebilly\Sdk\Exception\DataValidationException $e) {
    print_r($e->getValidationErrors());
}
