$service = new \Rebilly\Sdk\CoreService($client);

$couponsPaginator = $service->coupons()->getAllPaginator(limit: 5, filter: 'status:issued');
foreach ($couponsPaginator as $couponsPage) {
    printf("Coupons page %d/%d\n", $couponsPaginator->key() + 1, $couponsPaginator->count());
    foreach ($couponsPage as $coupon) {
        printf("Coupon #%s (%s): %s\n", $coupon->getId(), $coupon->getStatus(), $coupon->getDescription());
    }
}

// OR

$coupons = $service->coupons()->getAll(filter: 'status:issued');
foreach ($coupons as $coupon) {
    printf("Coupon #%s (%s): %s\n", $coupon->getId(), $coupon->getStatus(), $coupon->getDescription());
}
