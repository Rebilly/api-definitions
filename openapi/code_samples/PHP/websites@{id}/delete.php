try {
    $client->websites()->delete('websiteId');
} catch (Rebilly\Http\Exception\ClientException $e) {
    echo $e->getMessage();
}
