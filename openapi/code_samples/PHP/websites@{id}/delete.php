<?php

$service = new \Rebilly\Sdk\Service($client);
$service->websites()->delete('websiteId');
