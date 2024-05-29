<?php

$service = new \Rebilly\Sdk\Service($client);
$coupon = $service->coupons()->get('couponId');
