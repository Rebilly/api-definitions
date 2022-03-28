$forgotPasswordForm = new Rebilly\Entities\ForgotPassword();
$forgotPasswordForm->setEmail('johndoe@test.com');

try {
    $client->users()->forgotPassword($forgotPasswordForm);
} catch (Rebilly\Http\Exception\DataValidationException $e) {
    print_r($e->getValidationErrors());
}
