<?php
$service =  new \Rebilly\Sdk\CoreService($client);

$passwordTokens = $service->customerAuthentication()->getAllResetPasswordTokens();
