<?php

$service = new \Rebilly\Sdk\CoreService($client);

$order = \Rebilly\Sdk\Model\SubscriptionOrder::from()
    ->setWebsiteId('websiteId')
    ->setCustomerId('customerId')
    ->setItems([
        \Rebilly\Sdk\Model\OrderItem::from()
            ->setPlan(
                \Rebilly\Sdk\Model\OrderItemPlan::from()
                    ->setId('planId')
            )
            ->setQuantity(1),
    ]);

try {
    $order = $service->subscriptions()->create($order);
} catch (\Rebilly\Sdk\Exception\DataValidationException $e) {
    print_r($e->getValidationErrors());
}
