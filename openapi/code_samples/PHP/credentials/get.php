<?php

$service = new \Rebilly\Sdk\Service($client);

$customerCredentials = $service->customerAuthentication()->getAllCredentials(limit: 10);
