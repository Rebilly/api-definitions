<?php

$service = new \Rebilly\Sdk\CoreService($client);

$passwordToken = $service->customerAuthentication()->getResetPasswordToken('tokenId');
