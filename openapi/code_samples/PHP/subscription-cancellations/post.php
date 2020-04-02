$subscriptionCancelForm = new Rebilly\Entities\SubscriptionCancel();
$subscriptionCancelForm->setEffectiveTime(new DateTime());

try {
    $subscription = $client->subscriptions()->cancel('subscriptionId', $subscriptionCancelForm);
} catch (UnprocessableEntityException $e) {
    echo $e->getMessage();
}
