<?php

$service = new \Rebilly\Sdk\Service($client);

$isVerified = $service->customerAuthentication()->verify('token');
