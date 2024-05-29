<?php

$service = new \Rebilly\Sdk\Service($client);

$passwordToken = $service->customerAuthentication()->getResetPasswordToken('tokenId');
