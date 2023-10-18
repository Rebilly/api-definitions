<?php

$service = new \Rebilly\Sdk\CoreService($client);
$couponForm = new \Rebilly\Sdk\Model\Coupon();
$couponForm->setIssuedTime('2022-01-01T00:00:00-04:00');

$discountForm = new \Rebilly\Sdk\Model\DiscountFixed();
$discountForm->setCurrency('USD');
$discountForm->setAmount(1.99);

$couponForm->setDiscount($discountForm);

$restrictionForm = new \Rebilly\Sdk\Model\CouponRestrictionDiscountPerRedemption();
$restrictionForm->setQuantity(2);

$couponForm->setRestrictions([$restrictionForm]);

try {
    $coupon = $service->coupons()->update('couponId', $couponForm);
} catch (\Rebilly\Sdk\Exception\DataValidationException $e) {
    print_r($e->getValidationErrors());
}
