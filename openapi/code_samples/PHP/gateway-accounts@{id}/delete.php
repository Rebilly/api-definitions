<?php

$service = new \Rebilly\Sdk\Service($client);
$service->gatewayAccounts()->delete('gatewayAccountId');
