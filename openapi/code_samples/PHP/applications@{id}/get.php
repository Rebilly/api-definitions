<?php

$service = new \Rebilly\Sdk\Service($client);
$application = $service->applications()->get('applicationId');
