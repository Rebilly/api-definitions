$attachments = $client->attachments()->search([
    'filter' => 'relatedType:customer',
]);
