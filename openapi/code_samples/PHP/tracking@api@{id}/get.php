<?php

$service = new \Rebilly\Sdk\Service($client);
$apiTrackingLog = $service->tracking()->getApiLog('apiLogId');
