<?php

$service = new \Rebilly\Sdk\Service($client);
$cancellation = $service->subscriptionCancellations()->get('cancellationId');
