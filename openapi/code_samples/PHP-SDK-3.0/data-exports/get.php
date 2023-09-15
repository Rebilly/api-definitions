<?php

$service = new \Rebilly\Sdk\ReportsService($client);

$dataExportsPaginator = $service->dataExports()->getAllPaginator(limit: 5);
foreach ($dataExportsPaginator as $dataExportPage) {
    printf("dataExports page %d/%d\n", $dataExportsPaginator->key() + 1, $dataExportsPaginator->count());
    foreach ($dataExportPage as $dataExport) {
        printf("DataExport #%s: %s\n", $dataExport->getId(), $dataExport->getName());
    }
}

// OR

$dataExports = $service->dataExports()->getAll(limit: 100);
foreach ($dataExports as $dataExport) {
    printf("DataExport #%s: %s\n", $dataExport->getId(), $dataExport->getName());
}
