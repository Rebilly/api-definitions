<?php

$service = new \Rebilly\Sdk\UsersService($client);

$gatewayAccountForm = new \Rebilly\Sdk\Model\A1Gateway();
$gatewayAccountForm->setAcquirerName('Bank of Rebilly');
$gatewayAccountForm->setOrganizationId('organizationId');
$gatewayAccountForm->setMerchantCategoryCode(5734);
$gatewayAccountForm->setPaymentCardSchemes([
    'Visa',
    'MasterCard',
]);
$gatewayAccountForm->setMethod('cash');

try {
    $gatewayAccount = $service->gatewayAccounts()->create($gatewayAccountForm);
} catch (\Rebilly\Sdk\Exception\DataValidationException $e) {
    print_r($e->getValidationErrors());
}
