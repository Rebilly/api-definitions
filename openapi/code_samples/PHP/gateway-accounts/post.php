<?php

$service = new \Rebilly\Sdk\Service($client);

$gatewayAccountForm = new \Rebilly\Sdk\Model\Stripe();
$gatewayAccountForm->setAcquirerName('Bank of Rebilly');
$gatewayAccountForm->setMerchantCategoryCode('5734');
$gatewayAccountForm->setPaymentCardSchemes([
    'Visa',
    'MasterCard',
]);
$gatewayAccountForm->setMethod('payment-card');

try {
    $gatewayAccount = $service->gatewayAccounts()->create($gatewayAccountForm);
} catch (\Rebilly\Sdk\Exception\DataValidationException $e) {
    print_r($e->getValidationErrors());
}
