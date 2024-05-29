<?php

$service = new \Rebilly\Sdk\Service($client);

$forgotPasswordForm = new \Rebilly\Sdk\Model\ForgotPassword();
$forgotPasswordForm->setEmail('johndoe@test.com');

try {
    $service->account()->forgotPassword($forgotPasswordForm);
} catch (\Rebilly\Sdk\Exception\DataValidationException $e) {
    print_r($e->getValidationErrors());
}
