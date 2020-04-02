$invoiceItems = $client->invoiceItems()->search('invoiceId', [
    'filter' => 'quantity:5',
]);
