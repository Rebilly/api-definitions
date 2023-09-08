$service = new Rebilly\Sdk\CoreService($client);

$transactionForm = new Rebilly\Sdk\Model\PatchTransactionRequest();
$transactionForm->setCustomFields([
    [
        'name' => 'customField',
        'value' => 'customValue',
    ],
]);

$transaction = $service->transactions()->patch('transactionId', $transactionForm);
