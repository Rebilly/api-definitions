<?php
$service =  new \Rebilly\Sdk\CoreService($client);

$transactionForm = new \Rebilly\Sdk\Model\PatchTransactionRequest();
$transactionForm->setCustomFields([
    [
        'name' => 'customField',
        'value' => 'customValue',
    ],
]);

try {
    $transaction = $service->transactions()->patch('transactionId', $transactionForm);
} catch (\Rebilly\Sdk\Exception\DataValidationException $e) {
    print_r($e->getValidationErrors());
}
