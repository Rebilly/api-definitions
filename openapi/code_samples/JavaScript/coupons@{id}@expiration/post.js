const data = {
    expiredTime: "2020-05-25T18:51:14Z"
}

const coupon = await api.coupons.setExpiration({id: 'my-second-id', data});
