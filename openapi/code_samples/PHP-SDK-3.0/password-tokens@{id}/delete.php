<?php
$service =  new \Rebilly\Sdk\CoreService($client);

$client->customerAuthentication()->deleteResetPasswordToken('tokenId');
