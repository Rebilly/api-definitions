<?php

$service = new \Rebilly\Sdk\CoreService($client);

$invoiceItem = \Rebilly\Sdk\Model\InvoiceItem::from([
    'type' => \Rebilly\Sdk\Model\InvoiceItem::TYPE_DEBIT,
    'unitPrice' => 0.99,
    'quantity' => 5,
]);

try {
    $invoiceItem = $service->invoices()->update('invoiceId', 'invoiceItemId', $invoiceItem);
} catch (\Rebilly\Sdk\Exception\DataValidationException $e) {
    print_r($e->getValidationErrors());
}
