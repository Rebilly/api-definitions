<?php
$service =  new \Rebilly\Sdk\CoreService($client);

$ordersPaginator = $service->subscriptions()->getAllPaginator(filter: 'customerId:testCustomerId');
foreach ($ordersPaginator as $orderPage) {
    printf("Orders page %d/%d\n", $ordersPaginator->key() + 1, $ordersPaginator->count());
    foreach ($orderPage as $order) {
        printf("Order #%s (%s): %s\n", $order->getId(), $order->getOrderType(), $order->getStatus());
    }
}

// OR

$orders = $service->subscriptions()->getAll(filter: 'customerId:testCustomerId', limit: 10);
foreach ($orders as $order) {
    printf("Order #%s (%s): %s\n", $order->getId(), $order->getOrderType(), $order->getStatus());
}
