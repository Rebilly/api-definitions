$organizations = $client->organizations()->search([
    'filter' => 'city:Test',
]);
