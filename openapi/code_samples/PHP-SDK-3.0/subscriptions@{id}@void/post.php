$service = new \Rebilly\Sdk\CoreService($client);
$order = $client->subscriptions()->void('orderId');
