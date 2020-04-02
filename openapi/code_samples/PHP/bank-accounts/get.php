$bankAccounts = $client->bankAccounts()->search([
    'filter' => 'customerId:testId',
]);
