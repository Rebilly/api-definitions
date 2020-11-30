// build the redemption data
const data = {
  couponId: 'my-best-coupon',
  customerId: 'foobar-001'
};

const redemption = await api.coupons.redeem({data});
console.log(redemption.fields.id);
