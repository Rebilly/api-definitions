<?php

$service = new \Rebilly\Sdk\Service($client);
$service->apiKeys()->delete('apiKeyID');
