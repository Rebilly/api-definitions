try {
    $client->users()->delete('userId');
} catch (ServerException $e) {
    echo $e->getMessage();
}
