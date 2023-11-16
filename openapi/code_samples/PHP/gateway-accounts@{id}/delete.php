<?php

$service = new \Rebilly\Sdk\UsersService($client);
$service->gatewayAccounts()->delete('gatewayAccountId');
