$paymentInstruments = $client->paymentInstruments()->search([
    'filter' => 'status:active;method:payment-card',
]);
