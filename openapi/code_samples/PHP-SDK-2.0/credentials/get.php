$customerCredentials = $client->customerCredentials()->search([
    'filter' => 'customerId:testCustomer',
]);
