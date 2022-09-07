$service = new Rebilly\Sdk\CoreService($client);
// all parameters are optional.
$customers = $service->customers()->getAll(filter: 'firstName:John');
