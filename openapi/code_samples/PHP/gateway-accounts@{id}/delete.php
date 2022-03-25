try {
    $client->gatewayAccounts()->delete('gatewayAccountId');
} catch (Rebilly\Http\Exception\ClientException $e) {
    echo $e->getMessage();
}
