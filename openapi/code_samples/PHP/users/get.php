$users = $client->users()->search([
    'filter' => 'firstName:John',
]);
