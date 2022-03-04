$loginForm = new Rebilly\Entities\Login();
$loginForm->setEmail('test@test.com');
$loginForm->setPassword('1234');

try {
    $user = $client->users()->signin($loginForm);
} catch (Rebilly\Http\Exception\DataValidationException $e) {
    echo $e->getMessage();
}
