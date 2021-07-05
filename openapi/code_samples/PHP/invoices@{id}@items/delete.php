try {
    $invoiceItem = $client->invoiceItems()->delete('invoiceId');
} catch (UnprocessableEntityException $e) {
    echo $e->getMessage();
}
