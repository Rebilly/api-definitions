<?php

$service = new \Rebilly\Sdk\Service($client);

$couponForm = new \Rebilly\Sdk\Model\Coupon();

$discountForm = new \Rebilly\Sdk\Model\DiscountFixed();
$discountForm->setCurrency('USD');
$discountForm->setAmount(1.99);

$couponForm->setDiscount($discountForm);
// Coupon can be used right now
$couponForm->setIssuedTime(date('c'));

$restrictionArray = [
    'quantity' => 2,
];

$restrictionForm = new \Rebilly\Sdk\Model\CouponRestrictionDiscountPerRedemption($restrictionArray);

$couponForm->setRestrictions([$restrictionForm]);

try {
    $coupon = $service->coupons()->create($couponForm);
} catch (\Rebilly\Sdk\Exception\DataValidationException $e) {
    print_r($e->getValidationErrors());
}
