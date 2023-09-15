<?php
$service =  new \Rebilly\Sdk\CoreService($client);

$plan = new \Rebilly\Sdk\Model\SubscriptionOrderPlan([
    'recurringInterval' => [
        'unit' => PlanPeriod::UNIT_WEEK,
        'length' => 2,
    ],
]);

try {
    $plan = $service->plans()->update('planId', $plan);
} catch (\Rebilly\Sdk\Exception\DataValidationException $e) {
    print_r($e->getValidationErrors());
}

// OR

$plan = $service->plans()->get('planId');
$plan->setRecurringInterval(new PlanPeriod([
    'unit' => PlanPeriod::UNIT_WEEK,
    'length' => 2,
]));

try {
    $plan = $service->plans()->update('planId', $plan);
} catch (\Rebilly\Sdk\Exception\DataValidationException $e) {
    print_r($e->getValidationErrors());
}
