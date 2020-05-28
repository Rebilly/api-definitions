const redemption = await api.coupons.getRedemption({id: 'foobar-001'});
console.log(redemption.fields.id);