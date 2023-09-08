$service = new Rebilly\Sdk\CoreService($client);

$paymentCardTokensPaginator = $service->paymentTokens()->getAllPaginator(limit:  5);
foreach ($paymentCardTokensPaginator as $paymentCardTokensPage) {
    printf("Payment card tokens page %d/%d\n", $paymentCardTokensPaginator->key() + 1, $paymentCardTokensPaginator->count());
    foreach ($paymentCardTokensPage as $paymentCardToken) {
        printf("Payment card token #%s\n", $paymentCardToken->getId());
    }
}

// OR

$paymentCardTokens = $service->paymentTokens()->getAll();
foreach ($paymentCardTokens as $paymentCardToken) {
    printf("Payment card token #%s\n", $paymentCardToken->getId());
}
