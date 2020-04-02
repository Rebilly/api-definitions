$disputeForm = new Rebilly\Entities\Dispute();
$disputeForm->setTransactionId('transactionId');
$disputeForm->setCurrency('USD');
$disputeForm->setAmount(10);
$disputeForm->setReasonCode(1000);
$disputeForm->setType($disputeForm::TYPE_1CB);
$disputeForm->setStatus($disputeForm::STATUS_RESPONSE_NEEDED);
$disputeForm->setPostedTime('2025-01-01 05:00:00');

try {
    $dispute = $client->disputes()->update('disputeId', $dispute);
} catch (UnprocessableEntityException $e) {
    echo $e->getMessage();
}
