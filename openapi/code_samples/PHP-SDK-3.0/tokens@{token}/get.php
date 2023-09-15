<?php
$service =  new \Rebilly\Sdk\CoreService($client);
$paymentCardToken = $service->paymentTokens()->get('tokenId');
