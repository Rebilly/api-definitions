<?php
$service =  new \Rebilly\Sdk\CoreService($client);
$couponForm = new \Rebilly\Sdk\Model\Coupon([
    'issuedTime' => '2022-01-01T00:00:00-04:00',
]);

$discountArray = [
    'type' => \Rebilly\Sdk\Model\DiscountFixed::TYPE_FIXED,
    'currency' => 'USD',
    'amount' => 1.99,
];

$discountForm = \Rebilly\Sdk\Model\DiscountFactory::from($discountArray);
$couponForm->setDiscount($discountForm);

$restrictionArray = [
    'type' => \Rebilly\Sdk\Model\CouponRestrictionDiscountPerRedemption::TYPE_DISCOUNTS_PER_REDEMPTION,
    'quantity' => 2,
];

$restrictionForm = \Rebilly\Sdk\Model\CouponRestrictionFactory::from($restrictionArray);

$couponForm->setRestrictions([$restrictionForm]);

try {
    $coupon = $service->coupons()->update('couponId', $couponForm);
} catch (\Rebilly\Sdk\Exception\DataValidationException $e) {
    print_r($e->getValidationErrors());
}
