$customers = $client->customers()->search([
    'filter' => 'firstName:John',
]);
