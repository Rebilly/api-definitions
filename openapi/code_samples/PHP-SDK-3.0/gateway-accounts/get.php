$service = new Rebilly\Sdk\UsersService($client);

$gatewayAccountsPaginator = $service->gatewayAccounts()->getAllPaginator(limit: 5, filter: 'currency:USD');
foreach ($gatewayAccountsPaginator as $gatewayAccountsPage) {
    printf("Gateway accounts page %d/%d\n", $gatewayAccountsPaginator->key() + 1, $gatewayAccountsPaginator->count());
    foreach ($gatewayAccountsPage as $gatewayAccount) {
        printf("Gateway account #%s: %s\n", $gatewayAccount->getId(), $gatewayAccount->getGatewayName());
    }
}

// OR

$gatewayAccounts = $service->gatewayAccounts()->getAll(filter: 'currency:USD');
foreach ($gatewayAccounts as $gatewayAccount) {
    printf("Gateway account #%s: %s\n", $gatewayAccount->getId(), $gatewayAccount->getGatewayName());
}
