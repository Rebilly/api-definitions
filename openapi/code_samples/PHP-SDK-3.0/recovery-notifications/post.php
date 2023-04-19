$service = new Rebilly\Sdk\CoreService($client);

$recoveryNotification = SubscriptionRecoveryNotification::from()
    ->setTitle('First Reminder')
    ->setFilter('transaction.amount:50..')
    ->setTimeDelta(5)
    ->setNotification([
        'from' => 'email@merchant.com',
        'subject' => 'Recovery email',
        'html' => '<html>Your order is waiting</html>',
        'text' => 'Your order is waiting'
    ]);

try {
    $recoveryNotification = $service->recoveryNotifications()->create($recoveryNotification);
} catch (Rebilly\Sdk\Exception\DataValidationException $e) {
    print_r($e->getValidationErrors());
}
