<?php

$service = new \Rebilly\Sdk\Service($client);

$passwordTokens = $service->customerAuthentication()->getAllResetPasswordTokens();
