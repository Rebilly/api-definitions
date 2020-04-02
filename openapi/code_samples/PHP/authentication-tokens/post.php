$authenticationForm = new Rebilly\Entities\AuthenticationToken();
$authenticationForm->setUsername('username');
$authenticationForm->setPassword('test123');

try {
    $authenticationToken = $client->authenticationTokens()->login($authenticationForm);
} catch (UnprocessableEntityException $e) {
    echo $e->getMessage();
}
