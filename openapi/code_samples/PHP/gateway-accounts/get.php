$gatewayAccounts = $client->$gatewayAccounts()->search([
    'filter' => 'currency:USD',
]);
