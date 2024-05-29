<?php

$service = new \Rebilly\Sdk\Service($client);
$service->applicationInstances()->delete('applicationId');
