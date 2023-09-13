$service = new \Rebilly\Sdk\UsersService($client);
$apiTrackingLog = $service->tracking()->getApiLog('apiLogId');
