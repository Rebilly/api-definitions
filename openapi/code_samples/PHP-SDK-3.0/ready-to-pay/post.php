$service = new Rebilly\Sdk\CoreService($client);

$readyToPayForm = new Rebilly\Sdk\Model\PostReadyToPay();
$readyToPayForm->setCurrency('USD');
$readyToPayForm->setAmount(10);
$readyToPayForm->setCustomerId('customerId');

try {
    $transactions = $service->purchase()->readyToPay($readyToPayForm);
} catch (Rebilly\Sdk\Exception\DataValidationException $e) {
    print_r($e->getValidationErrors());
}
