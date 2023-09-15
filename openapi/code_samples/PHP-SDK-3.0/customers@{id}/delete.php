<?php
$service =  new \Rebilly\Sdk\CoreService($client);
$service->customers()->merge('customerId', 'targetCustomerId');
