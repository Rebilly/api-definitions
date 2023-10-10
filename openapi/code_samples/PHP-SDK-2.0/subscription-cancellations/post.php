$subscriptionCancellationForm = new Rebilly\Entities\SubscriptionCancellation();
$subscriptionCancellationForm->setSubscriptionId('subscription-1');
$subscriptionCancellationForm->setChurnTime(date('c'));

try {
    $subscription = $client->subscriptionCancellations()->create($subscriptionCancellationForm);
} catch (Rebilly\Http\Exception\DataValidationException $e) {
    print_r($e->getValidationErrors());
}
