$service = new Rebilly\Sdk\CoreService($client);
$customerLeadSource = $service->customers()->getLeadSource('customerId');
