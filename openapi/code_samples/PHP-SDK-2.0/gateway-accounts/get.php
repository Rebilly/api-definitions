$gatewayAccounts = $client->$gatewayAccounts()->search([
    'filter' => 'acceptedCurrencies:USD',
]);
