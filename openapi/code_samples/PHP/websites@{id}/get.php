<?php

$service = new \Rebilly\Sdk\Service($client);
$website = $service->websites()->get('websiteId');
