try {
    $transaction = $client->transactions()->patch($transactionId, $data);
} catch (Rebilly\Http\Exception\DataValidationException $e) {
    echo $e->getMessage();
}
