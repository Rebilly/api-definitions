<?php

$service = new \Rebilly\Sdk\CoreService($client);
$service->subscriptions()->delete('orderId');
