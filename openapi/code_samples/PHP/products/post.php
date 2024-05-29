<?php

$service = new \Rebilly\Sdk\Service($client);

$product = new \Rebilly\Sdk\Model\Product([
    'name' => 'my first product',
    'description' => 'made to be of the highest quality',
    'taxCategoryId' => '',
    'requiresShipping' => true,
    'accountingCode' => '100',
]);

try {
    $product = $service->products()->create($product);
} catch (\Rebilly\Sdk\Exception\DataValidationException $e) {
    print_r($e->getValidationErrors());
}
