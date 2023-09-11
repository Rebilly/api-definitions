$service = new Rebilly\Sdk\CoreService($client);

$couponForm = new Rebilly\Sdk\Model\Coupon();

$discountArray = [
    'currency' => 'USD',
    'amount' => 1.99,
];

$discountForm = new Rebilly\Sdk\Model\DiscountFixed($discountArray);
$couponForm->setDiscount($discountForm);
// Coupon can be used right now
$couponForm->setIssuedTime(date('c'));

$restrictionArray = [
    'quantity' => 2,
];

$restrictionForm = new Rebilly\Sdk\Model\CouponRestrictionDiscountPerRedemption($restrictionArray);

$couponForm->setRestrictions([$restrictionForm]);

try {
    $coupon = $service->coupons()->create($couponForm);
} catch (Rebilly\Sdk\Exception\DataValidationException $e) {
    print_r($e->getValidationErrors());
}
