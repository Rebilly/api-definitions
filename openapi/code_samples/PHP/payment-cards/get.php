$paymentCards = $client->paymentCards()->search([
    'filter' => 'status:active',
]);
