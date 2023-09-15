<?php
$service =  new \Rebilly\Sdk\CoreService($client);

$authenticationOptions = $service->customerAuthentication()->getAuthOptions();
