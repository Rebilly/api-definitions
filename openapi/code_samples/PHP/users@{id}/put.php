$userForm = new Rebilly\Entities\User();
$userForm->setFirstName('John');
$userForm->setLastName('Doe');
$userForm->setEmail('johndoe@test.com');

try {
    $user = $client->users()->update('userId', $userForm);
} catch (Rebilly\Http\Exception\DataValidationException $e) {
    echo $e->getMessage();
}
