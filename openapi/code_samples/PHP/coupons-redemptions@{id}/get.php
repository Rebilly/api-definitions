<?php

$service = new \Rebilly\Sdk\Service($client);
$couponRedemption = $service->coupons()->getRedemption('redemptionId');
