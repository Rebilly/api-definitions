$applications = $client->applications()->search([
    'filter' => 'status:available',
]);
