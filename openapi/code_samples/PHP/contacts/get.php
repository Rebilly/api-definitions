$contacts = $client->contacts()->search([
    'filter' => 'firstName:John',
]);
