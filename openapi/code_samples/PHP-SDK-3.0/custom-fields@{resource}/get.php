$service = new \Rebilly\Sdk\CoreService($client);
$customFields = $service->customFields()->getAll('customers');
