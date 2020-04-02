$planForm = new Rebilly\Entities\Plan();
$planForm->setName('TestPlan');
$planForm->setCurrency('USD');
$planForm->setTrialAmount(1);
$planForm->setTrialPeriodUnit('day');
$planForm->setTrialPeriodLength(1);

try {
    $plan = $client->plans()->update('planId', $planForm);
} catch (UnprocessableEntityException $e) {
    echo $e->getMessage();
}
