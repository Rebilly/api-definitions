$service = new Rebilly\Sdk\CoreService($client);
$service->recoveryNotifications()->delete('recoveryNotificationId');
