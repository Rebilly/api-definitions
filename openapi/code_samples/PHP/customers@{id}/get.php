<?php

$service = new \Rebilly\Sdk\Service($client);
$customer = $service->customers()->get('customerId');
