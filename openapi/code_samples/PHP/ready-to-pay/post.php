$readyToPayForm = new Rebilly\Entities\ReadyToPay();
$readyToPayForm->setCurrency('USD');
$readyToPayForm->setAmount(10);
$readyToPayForm->setWebsiteId('websiteId');
$readyToPayForm->setCustomerId('customerId');

$riskMetadata = new Rebilly\Entities\RiskMetadata();
$riskMetadata->setFingerprint('fingerprint');
$readyToPayForm->setRiskMetadata($riskMetadata);

try {
    $transaction = $client->transactions()->create($readyToPayForm);
} catch (Rebilly\Http\Exception\DataValidationException $e) {
    print_r($e->getValidationErrors());
}
