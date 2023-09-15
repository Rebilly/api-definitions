<?php

$service = new \Rebilly\Sdk\CoreService($client);

$plan = \Rebilly\Sdk\Model\SubscriptionOrderPlan::from([])
    ->setProductId('productId')
    ->setName('Test plan')
    ->setCurrency('USD')
    ->setPricing(new FlatRate(['price' => 9.99]))
    ->setRecurringInterval(
        PlanPeriod::from()
            ->setUnit(PlanPeriod::UNIT_MONTH)
            ->setLength(1),
    );
try {
    $plan = $service->plans()->create($plan);
} catch (\Rebilly\Sdk\Exception\DataValidationException $e) {
    print_r($e->getValidationErrors());
}
