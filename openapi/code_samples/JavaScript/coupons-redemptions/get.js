// all parameters are optional
const firstCollection = await api.coupons.getAllRedemptions();

// alternatively you can specify one or more of them
const params = {limit: 20, offset: 100, sort: '-createdTime'};
const secondCollection = await api.coupons.getAllRedemptions(params);

// access the collection items, each item is a CouponRedemption
secondCollection.items.forEach(redemption => console.log(redemption.fields.status));
