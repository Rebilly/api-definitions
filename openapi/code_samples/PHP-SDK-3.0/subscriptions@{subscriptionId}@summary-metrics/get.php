$service = new \Rebilly\Sdk\ReportsService($client);

$report = $service->subscriptions()->getSubscriptionSummaryMetrics('subscriptionId');
