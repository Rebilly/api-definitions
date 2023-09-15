<?php
$service =  new \Rebilly\Sdk\CoreService($client);

$product = new \Rebilly\Sdk\Model\Product([
    'requiresShipping' => false,
    'accountingCode' => '101',
]);

try {
    $product = $service->products()->update('productId', $product);
} catch (\Rebilly\Sdk\Exception\DataValidationException $e) {
    print_r($e->getValidationErrors());
}

// OR

$product = $service->products()->get('productId');
$product->setRequiresShipping(false)
        ->setAccountingCode('101');

try {
    $product = $service->products()->update('productId', $product);
} catch (\Rebilly\Sdk\Exception\DataValidationException $e) {
    print_r($e->getValidationErrors());
}
