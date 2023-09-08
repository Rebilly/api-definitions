$service = new Rebilly\Sdk\UsersService($client);

$userForm = new Rebilly\Sdk\Model\User();
$userForm->setFirstName('John');
$userForm->setLastName('Doe');
$userForm->setEmail('johndoe@test.com');

$user = $service->users()->update('userId', $userForm);
