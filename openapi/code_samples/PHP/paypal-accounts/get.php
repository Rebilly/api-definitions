$payPalAccounts = $client->payPalAccounts()->search([
    'filter' => 'status:active',
]);
