$subscriptionChangePlanForm = new Rebilly\Entities\SubscriptionChangePlan();
$subscriptionChangePlanForm->setPlanId('newPlanId');
$subscriptionChangePlanForm->setRenewalPolicy('retain');
$subscriptionChangePlanForm->setPreview(true);
$subscriptionChangePlanForm->setProrated(true);
$subscriptionChangePlanForm->setEffectiveTime('2018-02-02 00:00:00');

try {
    $subscription = $client->subscriptions()->changePlan('subscriptionId', $subscriptionChangePlanForm);
    echo $subscription->getLineItemSubtotal();
} catch (UnprocessableEntityException $e) {
    echo $e->getMessage();
}
