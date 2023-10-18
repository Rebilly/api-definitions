$websites = $client->websites()->search([
    'filter' => 'name:TestWebsite',
]);
