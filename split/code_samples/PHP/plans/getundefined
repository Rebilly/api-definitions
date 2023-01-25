$service = new Rebilly\Sdk\CoreService($client);

$plansPaginator = $service->plans()->getAllPaginator(limit: 5);

foreach ($plansPaginator as $planPage) {
    printf("Plans page %d/%d\n", $plansPaginator->key() + 1, $plansPaginator->count());
    foreach ($planPage as $plan) {
        printf("Plan #%s: %s\n", $plan->getId(), $plan->getProductId());
    }
}

// OR

$plans = $service->plans()->getAll(limit: 100);
foreach ($plans as $plan) {
    printf("Plan #%s: %s\n", $plan->getId(), $plan->getProductId());
}
