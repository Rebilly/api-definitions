<?php

$service = new \Rebilly\Sdk\Service($client);
$order = $service->subscriptions()->get('orderId');
