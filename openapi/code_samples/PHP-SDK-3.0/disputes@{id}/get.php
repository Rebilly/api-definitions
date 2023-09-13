$service = new \Rebilly\Sdk\CoreService($client);
$dispute = $service->disputes()->get('disputeId');
