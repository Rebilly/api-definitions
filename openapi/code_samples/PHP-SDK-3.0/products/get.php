$service = new \Rebilly\Sdk\CoreService($client);

$productsPaginator = $service->products()->getAllPaginator(limit: 5);
foreach ($productsPaginator as $productPage) {
    printf("Products page %d/%d\n", $productsPaginator->key() + 1, $productsPaginator->count());
    foreach ($productPage as $product) {
        printf("Product #%s: %s\n", $product->getId(), $product->getName());
    }
}

// OR

$products = $service->products()->getAll(limit: 100);
foreach ($products as $product) {
    printf("Product #%s: %s\n", $product->getId(), $product->getName());
}
