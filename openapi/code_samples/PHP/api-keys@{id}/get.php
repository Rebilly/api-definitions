<?php

$service = new \Rebilly\Sdk\Service($client);
$apiKeys = $service->apiKeys()->get('apiKeyID');
