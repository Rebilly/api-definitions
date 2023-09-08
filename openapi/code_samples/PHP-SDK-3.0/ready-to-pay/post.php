$service = new Rebilly\Sdk\CoreService($client);

$readyToPayForm = new Rebilly\Sdk\Model\PostReadyToPay();
$readyToPayForm->setCurrency('USD');
$readyToPayForm->setAmount(10);
$readyToPayForm->setCustomerId('customerId');

$transactions = $service->purchase()->readyToPay($readyToPayForm);
