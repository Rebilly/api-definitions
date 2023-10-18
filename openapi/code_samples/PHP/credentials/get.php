<?php

$service = new \Rebilly\Sdk\CoreService($client);

$customerCredentials = $service->customerAuthentication()->getAllCredentials(limit: 10);
