$couponForm = new Rebilly\Entities\Coupons\Coupon();

$discountArray = [
    'type' => Rebilly\Entities\Coupons\Discount::TYPE_FIXED,
    'currency' => 'USD',
    'amount' => 1.99,
];

$discountForm = new Rebilly\Entities\Coupons\Discount($discountArray);
$couponForm->setDiscount($discountForm);

$restrictionArray = [
    'type' => Rebilly\Entities\Coupons\Restriction::TYPE_DISCOUNTS_PER_REDEMPTION,
    'quantity' => 2,
];

$restrictionForm = new Rebilly\Entities\Coupons\Restriction([
    $restrictionArray,
]);

$couponForm->setRestrictions($restrictionForm);

try {
    $coupon = $client->coupons()->create($couponForm, 'redemptionCode');
} catch (UnprocessableEntityException $e) {
    echo $e->getMessage();
}
