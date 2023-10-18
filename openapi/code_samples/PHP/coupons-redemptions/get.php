<?php

$service = new \Rebilly\Sdk\CoreService($client);

$couponRedemptionsPaginator = $service->coupons()->getAllRedemptionsPaginator(limit: 5, filter: 'customerId:testCustomer');
foreach ($couponRedemptionsPaginator as $couponRedemptionsPage) {
    printf("Coupon redemptions page %d/%d\n", $couponRedemptionsPaginator->key() + 1, $couponRedemptionsPaginator->count());
    foreach ($couponRedemptionsPage as $couponRedemption) {
        printf("Coupon redemption #%s\n", $couponRedemption->getId());
    }
}

// OR

$couponRedemptions = $service->coupons()->getAllRedemptions(filter: 'customerId:testCustomer');
foreach ($couponRedemptions as $couponRedemption) {
    printf("Coupon redemption #%s\n", $couponRedemption->getId());
}
