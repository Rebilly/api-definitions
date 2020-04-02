$signupForm = new Rebilly\Entities\Signup();
$signupForm->setFirstName('John');
$signupForm->setLastName('Doe');
$signupForm->setEmail('johndoe@test.com');
$signupForm->setBusinessPhone('+123456789');
$signupForm->setPassword('1234');

try {
    $client->users()->signup($signupForm);
} catch (UnprocessableEntityException $e) {
    echo $e->getMessage();
}
