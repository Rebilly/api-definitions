$service = new \Rebilly\Sdk\CoreService($client);

$disputesPaginator = $service->disputes()->getAllPaginator(filter: 'transactionId:testId', limit: 5);
foreach ($disputesPaginator as $disputesPage) {
    printf("Disputes page %d/%d\n", $disputesPaginator->key() + 1, $disputesPaginator->count());
    foreach ($disputesPage as $dispute) {
        printf("Dispute #%s (%s)\n", $dispute->getId(), $dispute->getStatus());
    }
}

// OR

$disputes = $service->disputes()->getAll(filter: 'transactionId:testId');
foreach ($disputes as $dispute) {
    printf("Dispute #%s (%s)\n", $dispute->getId(), $dispute->getStatus());
}
