$disputes = $client->disputes()->search([
    'filter' => 'transactionId:testId',
]);
