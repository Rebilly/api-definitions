$service = new \Rebilly\Sdk\CoreService($client);

$order = SubscriptionOrder::from()
    ->setWebsiteId('websiteId')
    ->setCustomerId('customerId')
    ->setItems([
        OrderItem::from()
            ->setPlan(
                OriginalPlan::from()
                    ->setId('planId')
            )
            ->setQuantity(1),
    ]);

try {
    $order = $service->subscriptions()->create($order);
} catch (\Rebilly\Sdk\Exception\DataValidationException $e) {
    print_r($e->getValidationErrors());
}
