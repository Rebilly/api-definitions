$service = new Rebilly\Sdk\CoreService($client);
$service->coupons()->cancelRedemption('id');
