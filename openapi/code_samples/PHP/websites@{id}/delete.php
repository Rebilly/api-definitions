try {
    $client->websites()->delete('websiteId');
} catch (ServerException $e) {
    echo $e->getMessage();
}
