$transactions = $client->transactions()->search([
    'filter' => 'result:approved',
]);
