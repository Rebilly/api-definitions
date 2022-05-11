$resetPasswordForm = new Rebilly\Entities\ResetPassword();
$resetPasswordForm->setNewPassword('1234');

try {
    $user = $client->users()->resetPassword('token', $resetPasswordForm);
} catch (Rebilly\Http\Exception\DataValidationException $e) {
    print_r($e->getValidationErrors());
}
