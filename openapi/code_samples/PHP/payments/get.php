$payments = $client->payments()->search([
    'filter' => 'currency:USD',
]);
