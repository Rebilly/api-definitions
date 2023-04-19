$service = new Rebilly\Sdk\CoreService($client);

$recoveryNotificationsPaginator = $service->subscriptions()->getAllPaginator(filter: 'customerId:testCustomerId');
foreach ($recoveryNotificationsPaginator as $recoveryNotificationPage) {
    printf("Recovery notification page %d/%d\n", $recoveryNotificationsPaginator->key() + 1, $recoveryNotificationsPaginator->count());
    foreach ($recoveryNotificationPage as $recoveryNotification) {
        printf("Notification #%s (%s)\n", $recoveryNotification->getTitle(),$recoveryNotification->getId());
    }
}

// OR

$recoveryNotifications = $service->subscriptions()->getAll(filter: 'customerId:testCustomerId', limit: 10);
foreach ($recoveryNotifications as $recoveryNotification) {
    printf("Notification #%s (%s)\n", $recoveryNotification->getTitle(),$recoveryNotification->getId());
}
