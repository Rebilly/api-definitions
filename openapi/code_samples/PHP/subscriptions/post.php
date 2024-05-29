<?php

$service = new \Rebilly\Sdk\Service($client);

$order = \Rebilly\Sdk\Model\Subscription::from()
    ->setWebsiteId('websiteId')
    ->setCustomerId('customerId')
    ->setItems([
        \Rebilly\Sdk\Model\SubscriptionOrOneTimeSaleItem::from()
            ->setPlan(
                \Rebilly\Sdk\Model\OriginalPlan::from()
                    ->setId('planId')
            )
            ->setQuantity(1),
    ]);

try {
    $order = $service->subscriptions()->create($order);
} catch (\Rebilly\Sdk\Exception\DataValidationException $e) {
    print_r($e->getValidationErrors());
}
