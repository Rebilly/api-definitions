<?php
$service =  new \Rebilly\Sdk\CoreService($client);

$redemptionForm = new \Rebilly\Sdk\Model\CouponRedemption();
$redemptionForm->setCustomerId('customerId');
$redemptionForm->setCouponId('couponId');

$restrictionData = [
    'type' => \Rebilly\Sdk\Model\CouponRestrictionDiscountPerRedemption::TYPE_DISCOUNTS_PER_REDEMPTION,
    'quantity' => 2,
];

$restrictionForm = \Rebilly\Sdk\Model\CouponRestrictionFactory::from($restrictionData);

$redemptionForm->setAdditionalRestrictions([$restrictionForm]);

try {
    $couponRedemption = $service->coupons()->redeem($redemptionForm);
} catch (\Rebilly\Sdk\Exception\DataValidationException $e) {
    print_r($e->getValidationErrors());
}
