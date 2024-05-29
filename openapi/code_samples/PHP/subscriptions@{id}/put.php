<?php

$service = new \Rebilly\Sdk\Service($client);

$order = new \Rebilly\Sdk\Model\Subscription([
    'shipping' => new \Rebilly\Sdk\Model\ManualShipping([
        'amount' => 14.99,
    ]),
]);

try {
    $order = $service->subscriptions()->update('orderId', $order);
} catch (\Rebilly\Sdk\Exception\DataValidationException $e) {
    print_r($e->getValidationErrors());
}

// OR

$order = $service->subscriptions()->get('orderId');
$order->setShipping(new \Rebilly\Sdk\Model\ManualShipping(['amount' => 14.99]));

try {
    $order = $service->subscriptions()->update('orderId', $order);
} catch (\Rebilly\Sdk\Exception\DataValidationException $e) {
    print_r($e->getValidationErrors());
}
