<?php

$service = new \Rebilly\Sdk\Service($client);

$authenticationOptions = $service->customerAuthentication()->getAuthOptions();
