<?php

$service = new \Rebilly\Sdk\Service($client);

$authenticationForm = \Rebilly\Sdk\Model\AuthenticationTokenPasswordMode::from();
$authenticationForm->setUsername('username');
$authenticationForm->setPassword('test123');

try {
    $authenticationToken = $service->customerAuthentication()->login($authenticationForm);
} catch (\Rebilly\Sdk\Exception\DataValidationException $e) {
    print_r($e->getValidationErrors());
}
