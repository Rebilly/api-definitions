$invoices = $client->invoices()->search([
    'filter' => 'customerId:testCustomerId',
]);
