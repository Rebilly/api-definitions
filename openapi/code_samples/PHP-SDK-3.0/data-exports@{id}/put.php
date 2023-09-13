$service = new \Rebilly\Sdk\ReportsService($client);

$dataExport = new \Rebilly\Sdk\Model\Customers([
    'name' => 'Daily customer export v2',
    'format' => 'csv',
    'fields' => [
        'firstName',
        'lastName',
        'email',
        'lifetimeRevenue/amount',
        'lastPaymentTime',
    ],
]);

try {
    $dataExport = $service->dataExports()->update('dataExportId', $dataExport);
} catch (\Rebilly\Sdk\Exception\DataValidationException $e) {
    print_r($e->getValidationErrors());
}

// OR

$dataExport = $service->dataExports()->get('dataExportId');
$dataExport->setFields([
    'firstName',
    'lastName',
    'email',
    'lifetimeRevenue/amount',
    'lastPaymentTime',
]);

try {
    $dataExport = $service->dataExports()->update('dataExportId', $dataExport);
} catch (\Rebilly\Sdk\Exception\DataValidationException $e) {
    print_r($e->getValidationErrors());
}
