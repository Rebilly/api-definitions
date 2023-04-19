$recoveryNotificationForm = new Rebilly\Entities\Subscription();
$recoveryNotificationForm->setFilter('filter');
$recoveryNotificationForm->setTimeDelta(5);
$recoveryNotificationForm->setNotification([
    'from' => 'email@merchant.com',
    'subject' => 'Recovery email',
    'html' => '<html>Your order is waiting</html>',
    'text' => 'Your order is waiting'
]);

try {
    $recoveryNotification = $client->recoveryNotifications()->create($recoveryNotificationForm);
} catch (Rebilly\Http\Exception\DataValidationException $e) {
    print_r($e->getValidationErrors());
}
