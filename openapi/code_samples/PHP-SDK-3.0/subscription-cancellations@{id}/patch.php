<?php
$service =  new \Rebilly\Sdk\CoreService($client);

$cancellation = new \Rebilly\Sdk\Models\SubscriptionCancellation([
    'reason' => \Rebilly\Sdk\Model\SubscriptionCancellation::REASON_CONTRACT_EXPIRED,
]);

try {
    $cancellation = $service->subscriptionCancellations()->patch('cancellationId', $cancellation);
} catch (\Rebilly\Sdk\Exception\DataValidationException $e) {
    print_r($e->getValidationErrors());
}

// OR

$cancellation = $service->subscriptionCancellations()->get('cancellationId');
$cancellation->setReason(\Rebilly\Sdk\Model\SubscriptionCancellation::REASON_CONTRACT_EXPIRED);

try {
    $cancellation = $service->subscriptionCancellations()->patch('cancellationId', $cancellation);
} catch (\Rebilly\Sdk\Exception\DataValidationException $e) {
    print_r($e->getValidationErrors());
}
