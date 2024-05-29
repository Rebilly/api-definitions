<?php

$service = new \Rebilly\Sdk\Service($client);

$invoiceItem = \Rebilly\Sdk\Model\InvoiceItem::from([
    'type' => \Rebilly\Sdk\Model\InvoiceItem::TYPE_DEBIT,
    'unitPrice' => 0.99,
    'quantity' => 5,
]);

try {
    $invoiceItem = $service->invoices()->updateInvoiceItem('invoiceId', 'invoiceItemId', $invoiceItem);
} catch (\Rebilly\Sdk\Exception\DataValidationException $e) {
    print_r($e->getValidationErrors());
}
