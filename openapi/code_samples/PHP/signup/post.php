$signupForm = new Rebilly\Entities\Signup();
$signupForm->setFirstName('John');
$signupForm->setLastName('Doe');
$signupForm->setEmail('johndoe@test.com');
$signupForm->setBusinessPhone('+123456789');
$signupForm->setPassword('1234');

try {
    $client->users()->signup($signupForm);
} catch (Rebilly\Http\Exception\DataValidationException $e) {
    echo $e->getMessage();
}
