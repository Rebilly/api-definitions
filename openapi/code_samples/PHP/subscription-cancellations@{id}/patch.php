<?php

$service = new \Rebilly\Sdk\Service($client);

$cancellation = new \Rebilly\Sdk\Model\PatchSubscriptionCancellationRequest([
    'reason' => \Rebilly\Sdk\Model\PatchSubscriptionCancellationRequest::REASON_CONTRACT_EXPIRED,
]);

try {
    $cancellation = $service->subscriptionCancellations()->patch('cancellationId', $cancellation);
} catch (\Rebilly\Sdk\Exception\DataValidationException $e) {
    print_r($e->getValidationErrors());
}
