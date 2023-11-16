$customFields = $client->customFields()->search('customers', [
    'filter' => 'type:boolean',
]);
