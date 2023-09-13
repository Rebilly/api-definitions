$service = new \Rebilly\Sdk\ReportsService($client);

$dataExport = $service->dataExports()->get('dataExportId');
