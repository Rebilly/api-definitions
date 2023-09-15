<?php
$service =  new \Rebilly\Sdk\CoreService($client);
$service->subscriptionCancellations()->delete('cancellationId');
