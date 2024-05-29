<?php

$service = new \Rebilly\Sdk\Service($client);
$applicationInstances = $service->applicationInstances()->get('applicationId');
