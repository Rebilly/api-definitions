$gatewayAccountForm = new Rebilly\Entities\GatewayAccount();

$gatewayAccountForm->setGatewayName('A1Gateway');
$gatewayAccountForm->setAcquirerName('Bank of Rebilly');
$gatewayAccountForm->setOrganizationId('organizationId');
$gatewayAccountForm->setMerchantCategoryCode(5734);
$gatewayAccountForm->setWebsites([
    'websiteId1',
    'websiteId2',
]);
$gatewayAccountForm->setPaymentCardSchemes([
    Rebilly\Entities\PaymentCardScheme::SCHEME_VISA,
    Rebilly\Entities\PaymentCardScheme::SCHEME_MASTERCARD,
]);
$gatewayAccountForm->setMethod(Rebilly\Entities\PaymentMethod::METHOD_CASH);

$gatewayConfig = [
    'accountId' => 'test',
    'password' => '123',
];

$gatewayAccountForm->setGatewayConfig($gatewayConfig);

try {
    $gatewayAccount = $client->gatewayAccounts()->create($gatewayAccountForm);
} catch (UnprocessableEntityException $e) {
    echo $e->getMessage();
}
