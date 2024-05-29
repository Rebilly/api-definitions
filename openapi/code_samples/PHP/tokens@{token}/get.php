<?php

$service = new \Rebilly\Sdk\Service($client);
$paymentCardToken = $service->paymentTokens()->get('tokenId');
