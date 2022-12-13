$cashierRequests = $client->cashierRequest()->search([
    'filter' => 'customerId:testCustomer',
]);
