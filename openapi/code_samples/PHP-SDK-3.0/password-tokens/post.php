$service = new Rebilly\Sdk\Service($client);

$resetPasswordTokenForm = Rebilly\Sdk\Model\ResetPasswordToken::from([]);
$resetPasswordTokenForm->setUsername('username')

try {
    $tokens = $coreService->customerAuthentication()->createResetPasswordToken($resetPasswordTokenForm);
} catch (Rebilly\Sdk\Exception\DataValidationException $e) {
    print_r($e->getValidationErrors());
}