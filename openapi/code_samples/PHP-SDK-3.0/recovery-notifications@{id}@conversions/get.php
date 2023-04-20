$service = new Rebilly\Sdk\CoreService($client);

$recoveryNotificationConversionsPaginator = $service->subscriptions()->getAllPaginator(filter: 'customerId:testCustomerId');
foreach ($recoveryNotificationConversionsPaginator as $recoveryNotificationConversionPage) {
    printf("Recovery notification page %d/%d\n", $recoveryNotificationConversionsPaginator->key() + 1, $recoveryNotificationConversionsPaginator->count());
    foreach ($recoveryNotificationConversionPage as $recoveryNotificationConversion) {
        printf("Notification #%s (%s)\n", $recoveryNotificationConversion->getTitle(),$recoveryNotificationConversion->getId());
    }
}

// OR

$recoveryNotificationConversions = $service->subscriptions()->getAll(filter: 'customerId:testCustomerId', limit: 10);
foreach ($recoveryNotificationConversions as $recoveryNotificationConversion) {
    printf("Notification #%s (%s)\n", $recoveryNotificationConversion->getTitle(),$recoveryNotificationConversion->getId());
}
