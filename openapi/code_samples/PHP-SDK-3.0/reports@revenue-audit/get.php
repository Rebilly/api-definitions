$service = new Rebilly\Sdk\ReportsService($client);

$service->reports()->getRevenueAudit(limit: 5);