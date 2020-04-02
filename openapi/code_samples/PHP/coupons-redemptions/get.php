$couponRedemptions = $client->couponsRedemptions()->search([
    'filter' => 'customerId:testCustomer',
]);
