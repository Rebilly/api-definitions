$forgotPasswordForm = new Rebilly\Entities\ForgotPassword();
$forgotPasswordForm->setEmail('johndoe@test.com');

try {
    $client->users()->forgotPassword($forgotPasswordForm);
} catch (UnprocessableEntityException $e) {
    echo $e->getMessage();
}
