$invoiceItemForm = new Rebilly\Entities\InvoiceItem();
$invoiceItemForm->setType($invoiceItemForm::TYPE_DEBIT);
$invoiceItemForm->setUnitPrice(0.99);
$invoiceItemForm->setQuantity(5);

try {
    $invoiceItem = $client->invoiceItems()->create($invoiceItemForm, 'invoiceId');
} catch (Rebilly\Http\Exception\DataValidationException $e) {
    echo $e->getMessage();
}
