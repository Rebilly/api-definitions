$service = new \Rebilly\Sdk\CoreService($client);

$cancellationsPaginator = $service->subscriptionCancellations()->getAllPaginator(
    filter: 'reason:' . \Rebilly\Sdk\Model\SubscriptionCancellation::REASON_CONTRACT_EXPIRED,
);
foreach ($cancellationsPaginator as $cancellationPage) {
    printf("Cancellations page %d/%d\n", $cancellationsPaginator->key() + 1, $cancellationsPaginator->count());
    foreach ($cancellationPage as $cancellation) {
        printf(
            "Cancellation #%s (%s): %s\n",
            $cancellation->getId(),
            $cancellation->getStatus(),
            $cancellation->getSubscriptionId(),
        );
    }
}

// OR

$cancellations = $service->subscriptionCancellations()->getAll(
    filter: 'reason:' . \Rebilly\Sdk\Model\SubscriptionCancellation::REASON_CONTRACT_EXPIRED,
    limit: 10,
);
foreach ($cancellations as $cancellation) {
    printf(
        "Cancellation #%s (%s): %s\n",
        $cancellation->getId(),
        $cancellation->getStatus(),
        $cancellation->getSubscriptionId(),
    );
}
