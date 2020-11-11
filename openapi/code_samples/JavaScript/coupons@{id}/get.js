const coupon = await api.coupons.get({couponId: 'foobar-001'});
console.log(coupon.fields.status);
