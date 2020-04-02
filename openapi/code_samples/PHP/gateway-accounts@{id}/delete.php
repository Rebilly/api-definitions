try {
    $client->gatewayAccounts()->delete('gatewayAccountId');
} catch (ServerException $e) {
    echo $e->getMessage();
}
