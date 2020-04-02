try {
    $client->users()->activate('token');
} catch (UnprocessableEntityException $e) {
    echo $e->getMessage();
}
