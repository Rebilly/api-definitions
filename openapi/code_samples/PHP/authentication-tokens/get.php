<?php

$service = new \Rebilly\Sdk\Service($client);
$listOfTokens = $service->customerAuthentication()->getAllAuthTokens();

// alternatively you can specify one or more of them
$listOfTokens = $coreService->customerAuthentication()->getAllAuthTokens(limit: 5, offset: 2);
