<?php

$service = new \Rebilly\Sdk\UsersService($client);
$gatewayAccount = $service->gatewayAccounts()->get('gatewayAccountId');
