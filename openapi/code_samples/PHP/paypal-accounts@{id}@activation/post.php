$activationData = [
    'websiteId' => 'testWebsiteId',
    'currency' => 'USD',
];

try {
    $client->payPalAccounts()->activate($activationData, 'payPalAccountId');
} catch (UnprocessableEntityException $e) {
    echo $e->getMessage();
}
