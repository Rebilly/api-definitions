<?php
$service =  new \Rebilly\Sdk\UsersService($client);
$apiKeys = $service->apiKeys()->get('apiKeyID');
