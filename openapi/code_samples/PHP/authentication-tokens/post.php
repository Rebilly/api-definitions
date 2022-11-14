$authenticationForm = new Rebilly\Entities\AuthenticationToken();
$authenticationForm->setUsername('username');
$authenticationForm->setPassword('test123');

try {
    $authenticationToken = $client->authenticationTokens()->login($authenticationForm);
} catch (Rebilly\Http\Exception\DataValidationException $e) {
    print_r($e->getValidationErrors());
}
