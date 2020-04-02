$coupons = $client->coupons()->search([
    'filter' => 'status:issued',
]);
