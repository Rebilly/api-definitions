const coupon = await api.coupons.get({redemptionCode: 'foobar-001'});
console.log(coupon.fields.status);