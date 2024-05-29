<?php

$service = new \Rebilly\Sdk\Service($client);
$transaction = $service->transactions()->get('transactionId');
