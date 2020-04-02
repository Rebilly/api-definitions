$paymentCardAuthorizationForm = new Rebilly\Entities\PaymentCardAuthorization();
$paymentCardAuthorizationForm->setWebsiteId('websiteId');
$paymentCardAuthorizationForm->setCurrency('USD');
$paymentCardAuthorizationForm->setGatewayAccountId('gatewayAccountId');

try {
    $paymentCard = $client->paymentCards()->authorize('paymentCardId', $paymentCardAuthorizationForm);
} catch (UnprocessableEntityException $e) {
    echo $e->getMessage();
}
