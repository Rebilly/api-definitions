$subscriptions = $client->subscriptions()->search([
    'filter' => 'customerId:testCustomerId',
]);
