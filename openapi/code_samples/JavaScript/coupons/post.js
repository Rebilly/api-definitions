// first set the required properties for the new coupon
const data = {
    description: 'a new coupon',
    issuedTime: '2017-09-19T20:46:44Z',
    discount: {
        type: 'percent',
        value: 12
    },
    restrictions: [{
        type: 'discounts-per-redemption',
        quantity: 12
    }]
};

// the ID is optional
const firstKey = await api.coupons.create({data});

// or you can provide one
const secondKey = await api.coupons.create({redemptionCode: 'my-second-id', data});