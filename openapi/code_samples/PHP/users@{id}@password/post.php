$updatePasswordForm = new Rebilly\Entities\UpdatePassword();
$updatePasswordForm->setCurrentPassword('1234');
$updatePasswordForm->setNewPassword('5678');

try {
    $user = $client->users()->updatePassword('userId', $updatePasswordForm);
} catch (UnprocessableEntityException $e) {
    echo $e->getMessage();
}
