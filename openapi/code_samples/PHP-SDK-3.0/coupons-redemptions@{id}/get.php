$service = new \Rebilly\Sdk\CoreService($client);
$couponRedemption = $service->coupons()->getRedemption('redemptionId');
