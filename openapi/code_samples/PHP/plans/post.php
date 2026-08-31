<?php

$service = new \Rebilly\Sdk\Service($client);

$plan = \Rebilly\Sdk\Model\PlanSubscriptionPlan::from([])
    ->setProductId('productId')
    ->setName('Test plan')
    ->setCurrency('USD')
    ->setPricing(new \Rebilly\Sdk\Model\PlanFormulaFlatRate(['price' => 9.99]))
    ->setRecurringInterval(
        \Rebilly\Sdk\Model\PlanSubscriptionPlanRecurringInterval::from()
            ->setUnit(\Rebilly\Sdk\Model\PlanSubscriptionPlanRecurringInterval::UNIT_MONTH)
            ->setLength(1),
    );

try {
    $plan = $service->plans()->create($plan);
} catch (\Rebilly\Sdk\Exception\DataValidationException $e) {
    print_r($e->getValidationErrors());
}
