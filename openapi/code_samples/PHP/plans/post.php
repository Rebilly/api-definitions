<?php

$service = new \Rebilly\Sdk\CoreService($client);

$plan = \Rebilly\Sdk\Model\Plan::from([])
    ->setProductId('productId')
    ->setName('Test plan')
    ->setCurrency('USD')
    ->setPricing(new \Rebilly\Sdk\Model\PlanFormulaFlatRate(['price' => 9.99]))
    ->setRecurringInterval(
        \Rebilly\Sdk\Model\SubscriptionOrderPlanRecurringInterval::from()
            ->setUnit(\Rebilly\Sdk\Model\SubscriptionOrderPlanRecurringInterval::UNIT_MONTH)
            ->setLength(1),
    );

try {
    $plan = $service->plans()->create($plan);
} catch (\Rebilly\Sdk\Exception\DataValidationException $e) {
    print_r($e->getValidationErrors());
}
