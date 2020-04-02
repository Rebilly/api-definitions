$resetPasswordForm = new Rebilly\Entities\ResetPassword();
$resetPasswordForm->setNewPassword('1234');

try {
    $user = $client->users()->resetPassword('token', $resetPasswordForm);
} catch (UnprocessableEntityException $e) {
    echo $e->getMessage();
}
