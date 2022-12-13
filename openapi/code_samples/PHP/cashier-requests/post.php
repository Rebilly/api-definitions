$cashierRequestForm = new Rebilly\Entities\Cashier\CashierRequest();
$cashierRequestForm->setWebsiteId('websiteId');
$cashierRequestForm->setCustomerId('customerId');
$cashierRequestForm->setCurrency('USD');
$cashierRequestForm->setRedirectUrl('https://example.com')
$cashierRequestForm->setAmounts([10, 20, 30]);

$customAmount = Rebilly\Entities\Cashier\CustomAmount::createFromData([
        'minimum' => 5,
        'maximum' => 10,
        'multipleOf' => 1,
    ]);


$cashierRequestForm->setCustomAmount([$customAmount]);

try {
    $cashierRequest = $client->cashierRequest()->create($cashierRequestForm);
} catch (Rebilly\Http\Exception\DataValidationException $e) {
    print_r($e->getValidationErrors());
}
