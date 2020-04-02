$redemptionForm = new Rebilly\Entities\Coupons\Redemption();
$redemptionForm->setCustomerId('customerId');
$redemptionForm->setRedemptionCode('redemptionCode');

$restrictionArray = [
    'type' => Rebilly\Entities\Coupons\Restriction::TYPE_DISCOUNTS_PER_REDEMPTION,
    'quantity' => 2,
];

$restrictionForm = new Rebilly\Entities\Coupons\Restriction([
    $restrictionArray,
]);

$redemptionForm->setAdditionalRestrictions($restrictionForm);

try {
    $couponRedemption = $client->couponsRedemptions()->redeem($redemptionForm);
} catch (UnprocessableEntityException $e) {
    echo $e->getMessage();
}
