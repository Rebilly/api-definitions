$cashierRequests = $client->cashierRequests()->search([
    'filter' => 'customerId:testCustomer',
]);
