$plans = $client->plans()->search([
    'filter' => 'name:TestPlan',
]);
