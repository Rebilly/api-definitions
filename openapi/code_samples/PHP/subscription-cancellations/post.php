$subscriptionCancelForm = new Rebilly\Entities\SubscriptionCancel();
$subscriptionCancelForm->setEffectiveTime(new DateTime());

try {
    $subscription = $client->subscriptions()->cancel('subscriptionId', $subscriptionCancelForm);
} catch (Rebilly\Http\Exception\DataValidationException $e) {
    echo $e->getMessage();
}
