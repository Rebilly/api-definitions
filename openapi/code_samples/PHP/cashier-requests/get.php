$cashierRequest = $client->cashierRequest()->search([
    'filter' => 'customerId:testCustomer',
]);
