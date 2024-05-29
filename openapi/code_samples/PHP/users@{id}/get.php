<?php

$service = new \Rebilly\Sdk\Service($client);
$user = $service->users()->get('userId');
