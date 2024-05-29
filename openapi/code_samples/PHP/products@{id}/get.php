<?php

$service = new \Rebilly\Sdk\Service($client);
$product = $service->products()->get('productId');
