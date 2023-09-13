$service = new \Rebilly\Sdk\CoreService($client);
$service->products()->delete('productId');
