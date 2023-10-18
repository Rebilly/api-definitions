<?php

$service = new \Rebilly\Sdk\CoreService($client);
$order = $service->subscriptions()->void('orderId');
