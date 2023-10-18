<?php

$service = new \Rebilly\Sdk\CoreService($client);

$plan = new \Rebilly\Sdk\Model\Plan([
    'recurringInterval' => [
        'unit' => \Rebilly\Sdk\Model\SubscriptionOrderPlanRecurringInterval::UNIT_WEEK,
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
$plan->setRecurringInterval(new \Rebilly\Sdk\Model\SubscriptionOrderPlanRecurringInterval([
    'unit' => \Rebilly\Sdk\Model\SubscriptionOrderPlanRecurringInterval::UNIT_WEEK,
    'length' => 2,
]));

try {
    $plan = $service->plans()->update('planId', $plan);
} catch (\Rebilly\Sdk\Exception\DataValidationException $e) {
    print_r($e->getValidationErrors());
}
