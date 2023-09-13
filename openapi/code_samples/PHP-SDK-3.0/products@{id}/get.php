$service = new \Rebilly\Sdk\CoreService($client);
$product = $service->products()->get('productId');
