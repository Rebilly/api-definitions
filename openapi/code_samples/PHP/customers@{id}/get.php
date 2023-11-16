<?php

$service = new \Rebilly\Sdk\CoreService($client);
$customer = $service->customers()->get('customerId');
