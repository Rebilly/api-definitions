<?php
$service =  new \Rebilly\Sdk\CoreService($client);

$invoiceItem = new \Rebilly\Sdk\Model\InvoiceItem();
$invoiceItemForm->setType(\Rebilly\Sdk\Model\InvoiceItem::TYPE_DEBIT);
$invoiceItemForm->setUnitPrice(0.99);
$invoiceItemForm->setQuantity(5);

try {
    $invoiceItem = $service->invoices()->createInvoiceItem('invoiceId', $invoiceItem);
} catch (\Rebilly\Sdk\Exception\DataValidationException $e) {
    print_r($e->getValidationErrors());
}
