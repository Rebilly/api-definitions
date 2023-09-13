$service = new \Rebilly\Sdk\CoreService($client);

$service->customerAuthentication()->logout('token');
