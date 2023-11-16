$couponForm = new Rebilly\Entities\Coupons\Coupon([
    'issuedTime' => '2022-01-01T00:00:00-04:00',
]);

$discountArray = [
    'type' => Rebilly\Entities\Coupons\Discount::TYPE_FIXED,
    'currency' => 'USD',
    'amount' => 1.99,
];

$discountForm = Rebilly\Entities\Coupons\Discount::createFromData($discountArray);
$couponForm->setDiscount($discountForm);

$restrictionArray = [
    'type' => Rebilly\Entities\Coupons\Restriction::TYPE_DISCOUNTS_PER_REDEMPTION,
    'quantity' => 2,
];

$restrictionForm = Rebilly\Entities\Coupons\Restriction::createFromData($restrictionArray);

$couponForm->setRestrictions([$restrictionForm]);

try {
    $coupon = $client->coupons()->create($couponForm, 'couponId');
} catch (Rebilly\Http\Exception\DataValidationException $e) {
    print_r($e->getValidationErrors());
}
