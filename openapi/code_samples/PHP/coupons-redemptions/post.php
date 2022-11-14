$redemptionForm = new Rebilly\Entities\Coupons\Redemption();
$redemptionForm->setCustomerId('customerId');
$redemptionForm->setCouponId('couponId');

$restrictionData = [
    'type' => Rebilly\Entities\Coupons\Restriction::TYPE_DISCOUNTS_PER_REDEMPTION,
    'quantity' => 2,
];

$restrictionForm = Rebilly\Entities\Coupons\Restriction::createFromData($restrictionData);

$redemptionForm->setAdditionalRestrictions([$restrictionForm]);

try {
    $couponRedemption = $client->couponsRedemptions()->redeem($redemptionForm);
} catch (Rebilly\Http\Exception\DataValidationException $e) {
    print_r($e->getValidationErrors());
}
