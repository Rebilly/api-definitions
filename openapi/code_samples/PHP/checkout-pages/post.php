$checkoutPageForm = new Rebilly\Entities\CheckoutPage();
$checkoutPageForm->setPlanId('planId');
$checkoutPageForm->setWebsiteId('websiteId');
$checkoutPageForm->setName('TestCheckoutPage');
$checkoutPageForm->setUrlPathSegment('test-checkout-page');

try {
    $checkoutPage = $client->checkoutPages()->create($checkoutPageForm);
} catch (UnprocessableEntityException $e) {
    echo $e->getMessage();
}
