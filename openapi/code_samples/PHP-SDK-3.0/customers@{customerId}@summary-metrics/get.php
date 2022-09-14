$service = new Rebilly\Sdk\ReportsService($client);

$service->customers()->getCustomerLifetimeSummaryMetrics('customerId');