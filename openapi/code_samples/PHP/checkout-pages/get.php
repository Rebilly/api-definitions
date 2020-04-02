$checkoutPages = $client->checkoutPages()->search([
    'filter' => 'name:testCheckoutPage',
]);
