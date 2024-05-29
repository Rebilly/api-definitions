<?php

$service = new \Rebilly\Sdk\Service($client);
$gatewayAccount = $service->gatewayAccounts()->get('gatewayAccountId');
