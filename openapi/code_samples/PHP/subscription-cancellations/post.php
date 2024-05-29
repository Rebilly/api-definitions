<?php

$service = new \Rebilly\Sdk\Service($client);

$cancellation = new \Rebilly\Sdk\Model\SubscriptionCancellation([
    'subscriptionId' => 'subscriptionId',
    'churnTime' => new \DateTimeImmutable(),
    'canceledBy' => \Rebilly\Sdk\Model\SubscriptionCancellation::CANCELED_BY_MERCHANT,
    'reason' => \Rebilly\Sdk\Model\SubscriptionCancellation::REASON_CONTRACT_EXPIRED,
]);

try {
    $cancellation = $service->subscriptionCancellations()->create($cancellation);
} catch (\Rebilly\Sdk\Exception\DataValidationException $e) {
    print_r($e->getValidationErrors());
}
