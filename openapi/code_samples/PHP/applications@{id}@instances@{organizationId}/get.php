<?php

$service = new \Rebilly\Sdk\Service($client);
$applicationInstance = $service->applications()->getInstance('applicationId', 'organizationId');
