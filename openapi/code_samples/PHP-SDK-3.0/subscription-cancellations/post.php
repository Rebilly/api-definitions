<?php

$service = new \Rebilly\Sdk\CoreService($client);

$cancellation = new \Rebilly\Sdk\Models\SubscriptionCancellation([
    'subscriptionId' => 'subscriptionId',
    'churnTime' => new DateTimeImmutable(),
    'canceledBy' => \Rebilly\Sdk\Model\SubscriptionCancellation::CANCELED_BY_MERCHANT,
    'reason' => \Rebilly\Sdk\Model\SubscriptionCancellation::REASON_CONTRACT_EXPIRED,
]);

try {
    $cancellation = $service->subscriptionCancellations()->create($cancellation);
} catch (Rebilly\Http\Exception\DataValidationException $e) {
    print_r($e->getValidationErrors());
}
