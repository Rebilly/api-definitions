<?php

$service = new \Rebilly\Sdk\Service($client);
$service->customers()->deleteLeadSource('customerId');
