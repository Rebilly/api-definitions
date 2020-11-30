try {
    $transaction = $client->transactions()->patch($transactionId, $data);
} catch (UnprocessableEntityException $e) {
    echo $e->getMessage();
}
