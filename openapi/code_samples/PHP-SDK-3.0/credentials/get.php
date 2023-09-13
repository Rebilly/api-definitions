$service = new \Rebilly\Sdk\CoreService($client);

$customerCredentials = $service->customerAuthentication()->getAllCredentials(filter: 'customerId:testCustomer');
