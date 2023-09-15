<?php
$service =  new \Rebilly\Sdk\CoreService($client);

$leadSourceForm = \Rebilly\Sdk\Model\LeadSource::from([])
    ->setSource('TestSource')
    ->setCampaign('TestCampaign');

try {
    $customer = $service->customers()->createLeadSource('myCustomerId', $leadSourceForm);
} catch (\Rebilly\Sdk\Exception\DataValidationException $e) {
    print_r($e->getValidationErrors());
}
