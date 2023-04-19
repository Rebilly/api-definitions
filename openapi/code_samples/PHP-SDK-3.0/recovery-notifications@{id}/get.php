$service = new Rebilly\Sdk\CoreService($client);
$order = $service->recoveryNotifications()->get('recoveryNotificationId');
