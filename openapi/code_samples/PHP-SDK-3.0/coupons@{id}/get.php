$service = new Rebilly\Sdk\CoreService($client);
$coupon = $service->coupons()->get('couponId');
