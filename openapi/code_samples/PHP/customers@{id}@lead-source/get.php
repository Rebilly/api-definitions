<?php

$service = new \Rebilly\Sdk\Service($client);
$customerLeadSource = $service->customers()->getLeadSource('customerId');
