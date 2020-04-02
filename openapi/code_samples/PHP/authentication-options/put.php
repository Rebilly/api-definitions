$authenticationOptionsForm = new Rebilly\Entities\AuthenticationOptions();
// Regular expression below matches any password with 6+ length that contains alphabet symbols and/or numbers.
$authenticationOptionsForm->setPasswordPattern('/^[a-zA-Z0-9]{6,}$/');

try {
    $authenticationOptions = $client->authenticationOptions()->update($authenticationOptionsForm);
} catch (UnprocessableEntityException $e) {
    echo $e->getMessage();
}
