try {
    $client->users()->activate('token');
} catch (Rebilly\Http\Exception\DataValidationException $e) {
    echo $e->getMessage();
}
