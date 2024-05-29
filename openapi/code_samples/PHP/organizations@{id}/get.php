<?php

$service = new \Rebilly\Sdk\Service($client);
$organization = $service->organizations()->get('organizationId');
