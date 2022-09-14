$service = new Rebilly\Sdk\ReportsService($client);

$service->subscriptions()->getSubscriptionSummaryMetrics('subscriptionId');
