try {
    $invoiceItem = $client->invoiceItems()->delete('invoiceId', 'invoiceItemId');
} catch (UnprocessableEntityException $e) {
    echo $e->getMessage();
}
