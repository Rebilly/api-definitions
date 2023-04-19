$service = new Rebilly\Sdk\CoreService($client);

$recoveryNotification = new Rebilly\Sdk\Model\RecoveryNotification([
    'title' => 'First Reminder',
    'filter' => 'transaction.amout:50..',
    'timeDelta' => 5,
    'notification' => [
        'from' => 'email@merchant.com',
        'subject' => 'Recovery email',
        'html' => '<html>Your order is waiting</html>',
        'text' => 'Your order is waiting'
    ],
]);

try {
    $recoveryNotification = $service->recoveryNotifications()->update('recoveryNotificationId', $recoveryNotification);
} catch (Rebilly\Sdk\Exception\DataValidationException $e) {
    print_r($e->getValidationErrors());
}

// OR

$recoveryNotification = $service->recoveryNotifications()->get('recoveryNotificationId');
$recoveryNotification->setTitle('A Reminder');

try {
    $recoveryNotification = $service->recoveryNotifications()->update('recoveryNotificationId', $recoveryNotification);
} catch (Rebilly\Sdk\Exception\DataValidationException $e) {
    print_r($e->getValidationErrors());
}
