<?php

$service = new \Rebilly\Sdk\Service($client);
$service->subscriptionCancellations()->delete('cancellationId');
