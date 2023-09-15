<?php
$service =  new \Rebilly\Sdk\CoreService($client);

$disputeForm = new \Rebilly\Sdk\Model\Dispute();
$disputeForm->setTransactionId('transactionId');
$disputeForm->setCurrency('USD');
$disputeForm->setAmount(10);
$disputeForm->setReasonCode(1000);
$disputeForm->setType($disputeForm::TYPE_INFORMATION_REQUEST);
$disputeForm->setStatus($disputeForm::STATUS_RESPONSE_NEEDED);
$disputeForm->setPostedTime('2025-01-01 05:00:00');

try {
    $dispute = $service->disputes()->update('disputeId', $disputeForm);
} catch (\Rebilly\Sdk\Exception\DataValidationException $e) {
    print_r($e->getValidationErrors());
}
