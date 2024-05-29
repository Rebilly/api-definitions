<?php

$service = new \Rebilly\Sdk\Service($client);
$service->subscriptions()->delete('orderId');
