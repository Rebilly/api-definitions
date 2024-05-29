<?php

$service = new \Rebilly\Sdk\Service($client);

$plan = new \Rebilly\Sdk\Model\SubscriptionPlan([
    'recurringInterval' => [
        'unit' => \Rebilly\Sdk\Model\SubscriptionPlanRecurringInterval::UNIT_WEEK,
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
$plan->setRecurringInterval(new \Rebilly\Sdk\Model\SubscriptionPlanRecurringInterval([
    'unit' => \Rebilly\Sdk\Model\SubscriptionPlanRecurringInterval::UNIT_WEEK,
    'length' => 2,
]));

try {
    $plan = $service->plans()->update('planId', $plan);
} catch (\Rebilly\Sdk\Exception\DataValidationException $e) {
    print_r($e->getValidationErrors());
}
