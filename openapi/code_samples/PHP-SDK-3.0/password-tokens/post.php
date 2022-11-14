$service = new Rebilly\Sdk\CoreService($client);

$resetPasswordTokenForm = new Rebilly\Sdk\Model\ResetPasswordToken();
$resetPasswordTokenForm->setUsername('username')

try {
    $tokens = $coreService->customerAuthentication()->createResetPasswordToken($resetPasswordTokenForm);
} catch (Rebilly\Sdk\Exception\DataValidationException $e) {
    print_r($e->getValidationErrors());
}
