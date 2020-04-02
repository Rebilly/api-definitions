try {
    $payment = $client->transactions()->cancel('transactionId');
} catch (UnprocessableEntityException $e) {
    echo $e->getMessage();
}
