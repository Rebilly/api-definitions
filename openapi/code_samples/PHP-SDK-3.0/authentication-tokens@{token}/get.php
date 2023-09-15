<?php

$service = new \Rebilly\Sdk\CoreService($client);

$isVerified = $service->customerAuthentication()->verify('token');
