$planForm = new Rebilly\Entities\Plan();
$planForm->setName('TestPlan');
$planForm->setCurrency('USD');
$planForm->setTrialAmount(1);
$planForm->setTrialPeriodUnit('day');
$planForm->setTrialPeriodLength(1);
$planForm->setProductId('test-product');

try {
    $plan = $client->plans()->create($planForm);
} catch (UnprocessableEntityException $e) {
    echo $e->getMessage();
}
