$couponForm = new Rebilly\Entities\Coupons\Coupon();

$discountArray = [
    'currency' => 'USD',
    'amount' => 1.99,
];

$discountForm = new \Rebilly\Entities\Coupons\Discounts\Fixed($discountArray);
$couponForm->setDiscount($discountForm);
// Coupon can be used right now
$couponForm->setIssuedTime(date('Y-m-d H:i:s'));

$restrictionArray = [
    'quantity' => 2,
];

$restrictionForm = new Rebilly\Entities\Coupons\Restrictions\DiscountsPerRedemption($restrictionArray);

$couponForm->setRestrictions([$restrictionForm]);

try {
    $coupon = $client->coupons()->create($couponForm);
} catch (UnprocessableEntityException $e) {
    echo $e->getMessage();
}
