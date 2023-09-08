$service = new Rebilly\Sdk\UsersService($client);

$forgotPasswordForm = new Rebilly\Sdk\Model\ForgotPassword();
$forgotPasswordForm->setEmail('johndoe@test.com');

$service->account()->forgotPassword($forgotPasswordForm);
