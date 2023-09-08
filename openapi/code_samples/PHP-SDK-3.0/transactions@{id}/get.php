$service = new Rebilly\Sdk\CoreService($client);
$transaction = $service->transactions()->get('transactionId');
