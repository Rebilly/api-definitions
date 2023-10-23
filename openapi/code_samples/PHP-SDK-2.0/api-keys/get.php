$apiKeys = $client->apiKeys()->search([
    'filter' => 'description:Test',
]);
