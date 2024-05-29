<?php

$service = new \Rebilly\Sdk\Service($client);
$service->coupons()->cancelRedemption('id');
