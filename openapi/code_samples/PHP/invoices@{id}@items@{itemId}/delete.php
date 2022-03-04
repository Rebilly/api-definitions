try {
    $invoiceItem = $client->invoiceItems()->delete('invoiceId', 'invoiceItemId');
} catch (Rebilly\Http\Exception\DataValidationException $e) {
    echo $e->getMessage();
}
