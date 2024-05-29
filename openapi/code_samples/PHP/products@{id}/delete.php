<?php

$service = new \Rebilly\Sdk\Service($client);
$service->products()->delete('productId');
