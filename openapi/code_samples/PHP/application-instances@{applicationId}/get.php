<?php

$service = new \Rebilly\Sdk\Service($client);
$applicationInstance = $service->applicationInstances()->get('applicationId');
