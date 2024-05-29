<?php

$service = new \Rebilly\Sdk\Service($client);

$readyToPayForm = new \Rebilly\Sdk\Model\ReadyToPayAmount();
$readyToPayForm->setCurrency('USD');
$readyToPayForm->setAmount(10);
$readyToPayForm->setWebsiteId('websiteId');
$readyToPayForm->setCustomerId('customerId');

$riskMetadata = new \Rebilly\Sdk\Model\RiskMetadata();
$riskMetadata->setFingerprint('fingerprint');
$readyToPayForm->setRiskMetadata($riskMetadata);

try {
    $transactions = $service->purchase()->readyToPay($readyToPayForm);
} catch (\Rebilly\Sdk\Exception\DataValidationException $e) {
    print_r($e->getValidationErrors());
}
