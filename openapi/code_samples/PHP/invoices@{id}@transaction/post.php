<?php

$service = new \Rebilly\Sdk\Service($client);

$invoiceTransaction = new \Rebilly\Sdk\Model\InvoiceTransaction([
    'transactionId' => 'transactionId',
    'amount' => 149.99,
]);

try {
    $invoiceTransaction = $service->invoices()->applyTransaction('invoiceId', $invoiceTransaction);
} catch (\Rebilly\Sdk\Exception\DataValidationException $e) {
    print_r($e->getValidationErrors());
}
