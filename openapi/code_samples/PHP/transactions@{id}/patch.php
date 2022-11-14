try {
    $transaction = $client->transactions()->patch($transactionId, $data);
} catch (Rebilly\Http\Exception\DataValidationException $e) {
    print_r($e->getValidationErrors());
}
