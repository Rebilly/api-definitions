<?php

$service = new \Rebilly\Sdk\Service($client);

$report = $service->subscriptions()->getSubscriptionSummaryMetrics('subscriptionId');
