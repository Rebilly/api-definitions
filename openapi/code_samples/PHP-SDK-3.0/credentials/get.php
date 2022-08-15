$service = new Rebilly\Sdk\Service($client);

$customerCredentials = $service->customerAuthentication()->getAllCredentials(filter: 'customerId:testCustomer');
