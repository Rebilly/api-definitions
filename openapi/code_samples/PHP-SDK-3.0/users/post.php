<?php

$service = new \Rebilly\Sdk\UsersService($client);

$userForm = new \Rebilly\Sdk\Model\User();
$userForm->setFirstName('John');
$userForm->setLastName('Doe');
$userForm->setEmail('johndoe@test.com');

try {
    $user = $service->users()->create($userForm);
} catch (\Rebilly\Sdk\Exception\DataValidationException $e) {
    print_r($e->getValidationErrors());
}
