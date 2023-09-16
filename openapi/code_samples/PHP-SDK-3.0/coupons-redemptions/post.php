<?php

$service = new \Rebilly\Sdk\CoreService($client);

$redemptionForm = new \Rebilly\Sdk\Model\CouponRedemption();
$redemptionForm->setCustomerId('customerId');
$redemptionForm->setCouponId('couponId');

$restrictionForm = new \Rebilly\Sdk\Model\CouponRestrictionDiscountPerRedemption();
$restrictionForm->setQuantity(2);

$redemptionForm->setAdditionalRestrictions([$restrictionForm]);

try {
    $couponRedemption = $service->coupons()->redeem($redemptionForm);
} catch (\Rebilly\Sdk\Exception\DataValidationException $e) {
    print_r($e->getValidationErrors());
}
