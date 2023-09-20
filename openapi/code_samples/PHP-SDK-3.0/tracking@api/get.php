<?php

$service = new \Rebilly\Sdk\UsersService($client);

$apiTrackingLogsPaginator = $service->tracking()->getAllApiLogsPaginator(limit: 5, filter: 'status:200');
foreach ($apiTrackingLogsPaginator as $apiTrackingLogsPage) {
    printf("API tracking logs page %d/%d\n", $apiTrackingLogsPaginator->key() + 1, $apiTrackingLogsPaginator->count());
    foreach ($apiTrackingLogsPage as $apiTrackingLog) {
        printf("API tracking log #%s: %s\n", $apiTrackingLog->getId(), $apiTrackingLog->getRequest());
    }
}

// OR

$apiTrackingLogs = $service->tracking()->getAllApiLogs(filter: 'status:200');
foreach ($apiTrackingLogs as $apiTrackingLog) {
    printf("API tracking log #%s: %s\n", $apiTrackingLog->getId(), $apiTrackingLog->getRequest());
}
