<?php

$service = new \Rebilly\Sdk\Service($client);
$service->customers()->merge('customerId', 'targetCustomerId');
