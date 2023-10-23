$authenticationTokens = $client->authenticationTokens()->search([
    'filter' => 'customerId:testCustomer',
]);
